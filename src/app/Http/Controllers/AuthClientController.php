<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AuthClientController extends Controller
{
    public function index()
    {
        return view('login_client');
    }


    public function auth(Request $request)
    {
        try {
            $user = User::where(['email' => $request->email, 'password' => md5($request->password)])->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return redirect('login')->with('fail', 'Invalid email or password');
        }
        $me = [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
        ];
        // Role 0 Admin 1 Buyer 2 Seller
        if ($user->role == 2) {
            session(['seller' => $me]);
            return redirect('/');
        }
        if ($user->role == 1) {
            session(['buyer' => $me]);
            return redirect('/buyer');
        }

        return redirect('login')->with('fail', 'Invalid email or password');
    }

    public function logout()
    {
        session()->forget('seller');
        session()->forget('buyer');
        return redirect('/');
    }
}
