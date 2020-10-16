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
    public function getPostById($id){
        $post= DB::table('post')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id){
        DB::table('post')->where('id',$id)->delete();
        return back()->with('post_delete','Post has been delete successfuly!');
    }

    public function updatePost($id){
        $post= DB::table('post')->where('id',$id)->first();
        return view('edit-post',compact('post'));
    }

    public function updatePosts(Request $req){
        $post= DB::table('post')->where('id',$req->id)->update([
            'title'=>$req->title,
            'body'=>$req->body
        ]);
        return back()->with('post-update','Post Has Been Update Successfully!');
    }
    
}
