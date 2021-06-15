<?php

namespace App\Http\Controllers;

use App\Model\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $result = DB::table('points')
            ->selectRaw('sum(point) as point')
            ->where('user_id', session('seller')['id'])
            ->get();

        return view('seller.home', compact('result'));
    }
}
