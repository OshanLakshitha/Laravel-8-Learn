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
    public function addPost(){
        return view('add-post');
    }
    public function addPostSubmit(Request $req){
        DB::table('post')->insert([
            'title'=> $req->title,
            'body'=> $req->body
        ]);
        return back()->with('post_created','Post Has been create successfully');
    }
}
