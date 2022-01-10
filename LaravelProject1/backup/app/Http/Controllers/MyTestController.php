<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTestController extends Controller
{
    public function index()
    {
        return __CLASS__ . '=>' . __FUNCTION__;
    }
    public function all($id)
    {
        return view('test', compact('id'));
    }
}

