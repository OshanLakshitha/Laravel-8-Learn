<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function loginSubmit(Request $req){

        $validatedData = $req->validate([
            'name'=>'required|email',
            'pw'=>'required|min:6|max:12'
        ]);

        $name=$req->input('name');
        $pw=$req->input('pw');
        return 'Email : '. $name . '<br>'.'Password :'. $pw;
    }
}