<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(Request $request){
        // dd($request['name']);
        // $req_name = $request->name
        $data = [
            'name'=>"Youssef",
            'from_url'=>$request->name
        ];
        return view('home',$data);
    }
}
