<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){
        $data=User::all();
        return view ('Admin.user',compact('data'));
    }


     public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }

 public function foodmenu(){
        // $data=User::all();
        return view ('Admin.foodmenu',);
    }

 public function upload(Request $request){

 $data = new food;

 $image = $request->image;
 $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->image->move('foodimage', $imagename);
    $data->image = $imagename;
    $data->title = $request->title;
    $data->price = $request->price;
    $data->description = $request->description;
    $data->save();
    return redirect()->back();


    }


}
