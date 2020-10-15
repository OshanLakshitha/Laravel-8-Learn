<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
        $post=DB::table('post')->get();
        return view('post',compact('post'));
    }
}
