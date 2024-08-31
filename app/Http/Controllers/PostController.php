<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //

    public function index(Request $request){
        $data = [
            'posts'=>Post::all()
        ];
        return view('posts',$data);
    }
}
