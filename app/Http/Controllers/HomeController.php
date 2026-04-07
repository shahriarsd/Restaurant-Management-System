<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\model\App\Models\User;
use App\Models\Food;

// use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data=Food::all();
        return view('home',compact('data'));
    }

    public function redirects()
    {

        $data=Food::all();

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('Admin.adminhome',);
        }

        else{
            return view('home',compact('data'));
        }
    }
}




