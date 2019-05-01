<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        $isim = 'Hakan';
        return view('test', compact('isim'));
    }
}
