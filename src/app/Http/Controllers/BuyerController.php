<?php

namespace App\Http\Controllers;

use App\Model\Sell;
use App\Model\TakeOrder;
use App\Model\User;
use App\Model\UserSubscribe;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Transaction;

class BuyerController extends Controller
{
    public function home()
    {
        return view('buyer.home');
    }

    public function trashPicks()
    {
        $user_id = session('buyer')['id'];
        // status 1 = active
        $userSubscribe = UserSubscribe::where([
            ['user_id', $user_id],
            ['status', 1],
            ['end_date', '>=', date('Y-m-d')]
        ])->count();

        if (!$userSubscribe) {
            return redirect('/buyer/subscribe');
        }

        $orders = Sell::with(['getCategory'])
            ->where('status', 0)
            ->orderBy('id', 'desc')
            ->paginate('20');
        return view('buyer.trash-pick', compact('orders'));
    }

    public function getHistory()
    {
        $orders = TakeOrder::with(['getOrder', 'getOrder.getUser', 'getOrder.getCategory'])
            ->where('buyer_id', session('buyer')['id'])
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('buyer.history', compact('orders'));
    }

    public function ask(){
        return view('buyer.help');
    }

    public function getDetailHistory($id)
    {
        $order = TakeOrder::with(['getOrder', 'getOrder.getUser', 'getOrder.getCategory'])
            ->where([
                ['buyer_id', session('buyer')['id']],
                ['id', $id]
            ])
            ->orderBy('id', 'desc')
            ->first();
        return view('buyer.detail', compact('order'));
    }

    public function profile()
    {
        $user = User::where('id', session('buyer')['id'])->first();
        return view('buyer.profile', compact('user'));
    }

    public function subscriptions()
    {
        return view('buyer.subscriptions-plan');
    }

    public function subscribe($id)
    {
        switch ($id) {
            case '1':
                $id = 1;
                $price = 50000;
                $name = "Diamond";
                break;
            case '2':
                $id = 2;
                $price = 30000;
                $name = "Gold";
                break;
            case '3':
                $id = 3;
                $price = 20000;
                $name = "Silver";
                break;
        }
        $data = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
        ];
        return view('buyer.subscribe-month', compact('data'));
    }

    public function mySubscription()
    {
        $userSubs = UserSubscribe::where('user_id', session('buyer')['id'])->orderBy('id', 'desc')->first();

        if ($userSubs == '') {
            return redirect('buyer/subscribe');
        }

        Config::$serverKey = 'SB-Mid-server-FD7wWVzs0JDPeZNXVJCHpEaN';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        try {
            $status = Transaction::status($userSubs->id);
        } catch (\Exception $exception) {
            $status = false;
        }

        if ($status == false) {
            return redirect('buyer/subscribe');
        }

        if ($status->transaction_status == 'settlement') {
            $userSubs->status = 1;
            $userSubs->update();
        }

        $transaction = $status->transaction_status;

        return view('buyer.my-subscription', compact('userSubs', 'transaction'));
    }

    public function trashPick($id)
    {
        $order = Sell::with(['getCategory'])
            ->where('id', $id)
            ->first();
        return view('buyer.trash-take', compact('order'));
    }
}
