<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('register_client');
    }

    public function registerStore(Request $request)
    {
        $userModel = new User();
        $res = $userModel->register($request->fullName, $request->email, $request->password, $request->role);
        if ($res) {
            return redirect('login')->with('success', 'Successfully registered');
        }
        return redirect('register')->with('fail', 'Email already taken');
    }
}
