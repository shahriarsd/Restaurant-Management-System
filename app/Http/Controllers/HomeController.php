<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\model\App\Models\User;
use App\Models\Cart;
use App\Models\Food;
use App\Models\Foodchef;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data=Food::all();

        $data2=Foodchef::all();

        return view('home',compact('data','data2'));
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

    public function addcart(Request $request, $id){
        if(Auth::id()){
            $user_id=Auth::id();
            $foodid=$id;
            $quantity=$request->quantity;
            $cart=new Cart;
            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;
            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }



}




