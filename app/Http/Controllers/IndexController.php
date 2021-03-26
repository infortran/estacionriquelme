<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(){
        return view('theme.template');
    }

    public function login2(){
        return view('auth.login2');
    }
}
