<?php

namespace App\Http\Controllers;

// use Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hoge(Request $request)
    {
        return ['message' => 'Hello World'];
    }

    public function fuga(Request $request)
    {
        return ['message' => 'Good Morning'];
    }
}
