<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
// use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function redirects()
    {
        $usertype = Auth::users()->usertype;

        if ($usertype == '1') {
            return view();
        } else {
            return view('Admin.home');
        }
    }
}
