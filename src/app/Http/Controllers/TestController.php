<?php

namespace App\Http\Controllers;

use App\Model\Test;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        return Test::all();
    }
}
