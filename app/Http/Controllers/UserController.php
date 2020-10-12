<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function index(){
    $name='oshan';
    $users=array(
        "name"=>"oshan Lakshitha",
        "email"=>"oshan@gmail.com",
        "phone"=>"0767470196"
    );
    return view('user',compact('name','users'));
}
}
