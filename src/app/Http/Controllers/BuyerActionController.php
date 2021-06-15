<?php

namespace App\Http\Controllers;

use App\Model\Point;
use App\Model\Sell;
use App\Model\TakeOrder;
use App\Model\UserSubscribe;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class BuyerActionController extends Controller
{
    public function takeOrder(Request $request)
    {
        $takeOrder = new TakeOrder();
        $takeOrder->order_id = $request->order_id;
        $takeOrder->buyer_id = session('buyer')['id'];
        $takeOrder->save();

        // update status
        $itemSell = Sell::where('id', $request->order_id)->first();
        $itemSell->status = 1;
        $itemSell->update();

        return redirect('buyer/history')->with('success','Success pick new order');
    }

    public function updateOrder(Request $request){
        $itemSell = Sell::where('id', $request->sell_id)->first();
        $itemSell->status = 2;
        $itemSell->update();

        $takeOrder = TakeOrder::where('id', $request->take_order_id)->first();
        $takeOrder->total_kg = $request->weight;
        $takeOrder->fee = $request->weight * $request->price;
        $takeOrder->update();

        // add point
        $point = new Point();
        $point->user_id = $request->seller_id;
        $point->point = 100;
        $point->save();

        return redirect('buyer/history');
    }

    public function subscribe(Request $request)
    {
        // Midtrans server key
        Config::$serverKey = 'SB-Mid-server-FD7wWVzs0JDPeZNXVJCHpEaN';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // save subscription
        $userSubscribe = new UserSubscribe();
        $userSubscribe->user_id = session('buyer')['id'];
        $userSubscribe->subs_id = $request->plan;
        $userSubscribe->active_date = date('Y-m-d');
        switch ($request->tier) {
            case 3:
                $userSubscribe->end_date = date('Y-m-d', strtotime('+3 month'));
                break;
            case '6':
                $userSubscribe->end_date = date('Y-m-d', strtotime('+6 month'));
                break;
            default:
                $userSubscribe->end_date = date('Y-m-d', strtotime('+12 month'));
                break;
        }
        $userSubscribe->status = 0;
        $userSubscribe->save();


        $orderSession = array(
            'transaction_details' => array(
                'order_id' => $userSubscribe->id,
                'gross_amount' => $request->tier * $request->price,
            ),
            'customer_details' => array(
                'first_name' => session('buyer')['name'],
//                'last_name' => 'pratama',
                'email' => session('buyer')['email'],
            ),
        );


        return response()->json([
            'session' => Snap::getSnapToken($orderSession)
        ]);
    }
}
