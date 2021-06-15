<?php

namespace App\Http\Controllers;

use App\Model\Point;
use App\Model\Sell;
use App\Model\TrashCategory;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function trashPick(Request $request)
    {
        $step = $request->query('step');

        if ($step == 3 or session('trash-item')) {
            $TrashCategory = new TrashCategory();
            $trashCategories = $TrashCategory->getAllTrashCategories();
            return view('seller.trash-pick3', compact('trashCategories'));
        }

        if ($step == 2 or session('trash-bio')) {
            $TrashCategory = new TrashCategory();
            $trashCategories = $TrashCategory->getAllTrashCategories();
            return view('seller.trash-pick2', compact('trashCategories'));
        }


        return view('seller.trash-pick');
    }

    public function profile()
    {
        $user = User::where('email', session('seller')['email'])->first();
        return view('seller.profile', compact('user'));
    }

    public function history()
    {
        $sellModel = new Sell();
        // get history data order
        $orders = $sellModel->getHistoryOrder(session('seller')['id']);
        return view('seller.history', compact('orders'));
    }

    public function point()
    {

        return view('seller.point');
    }

    public function withdraw($type)
    {
        $point = DB::table('points')
            ->selectRaw('sum(point) as point')
            ->where('user_id', session('seller')['id'])
            ->get();

        return view('seller.withdraw', compact('type','point'));
    }

    public function ask()
    {
        return view('seller.ask');
    }

    public function trashDrop()
    {
        return view('seller.trash-drop');
    }

}
