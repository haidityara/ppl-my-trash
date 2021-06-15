<?php

namespace App\Http\Controllers;

use App\Model\Point;
use App\Model\Sell;
use App\Model\Withdrawal;
use Illuminate\Http\Request;

class SellerActionController extends Controller
{
    public function trashPickS1(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'area' => $request->area,
            'address' => $request->address,
        ];
        session(['trash-bio' => $data]);

        return redirect('trash-pick?step=2');
    }

    public function trashPickS2(Request $request)
    {

        session(['trash-item' => $request->category]);
        return redirect('trash-pick?step=3');
    }

    public function withdrawPoint(Request $request){
        $user_id = $request->user_id;
        $withdrawal = new Withdrawal();
        $withdrawal->user_id = $user_id;
        $withdrawal->total = $request->total;
        $withdrawal->phone = $request->phone;
        $withdrawal->type = $request->type;
        $withdrawal->save();

        $point = new Point();
        $point->user_id = $user_id;
        $point->point = '-'.$request->total;
        $point->save();

        return redirect('/')->with('success','Success withdraw point');

    }

    public function trashPickS3(Request $request)
    {
        $imageName = "";

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = date('y-m-d') . $image->getClientOriginalName();
            $destinationPath = public_path('trash');
            $image->move($destinationPath, $imageName);
        }

        foreach (session('trash-item') as $item) {
            $sell = new Sell();
            $sell->user_id = session('seller')['id'];
            $sell->area = session('trash-bio')['area'];
            $sell->address = session('trash-bio')['address'];
            $sell->note = session('trash-bio')['phone'];
            $sell->trash_category_id = $item;
            // 0 Open 1 ready to pick 2 success 3 cancel
            $sell->status = 0;
            $sell->image = $imageName;
            $sell->save();

        }
        session()->forget('trash-bio');
        session()->forget('trash-item');
        return redirect('history');
    }
}
