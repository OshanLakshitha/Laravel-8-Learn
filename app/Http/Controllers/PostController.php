<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function createPost(Request $req){
       $post=new Post();
       $post->title=$req->postTitle;
       $post->body=$req->postBody;
       $post->save();
       return back()->with('post_created','Post has Created successful');
    }

    public function deletePost($id){
        Post::where('id',$id)->delete();
        return back()->with('post_delete','Post has been deleted successfully!');
    }

    public function updatePost($id){
        $post=Post::where('id',$id)->first();
        return view('update-post',compact('post'));
    }

    public function getPost(){
       $posts=Post::orderBy('id','DESC')->get();
       return view('post',compact('posts'));
    }

    public function getPostById($id){
        $post=Post::where('id',$id)->first();
        return view('single-post',compact('post'));
     }

     public function updateingPost(Request $req){
        $post= Post::find($req->id);
        $post->title=$req->postTitle;
        $post->body=$req->postBody;
        $post->save();

        return back()->with('update','Post has been Updated successfully!');
     }

}
