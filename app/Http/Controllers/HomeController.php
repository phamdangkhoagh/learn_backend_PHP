<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHello()
    {
        return view('modules.customer.index');
    }

    public function getCreate(){
        return "create a page!";
    }

    public function getIndex(){
        return view('home');
    }
}
