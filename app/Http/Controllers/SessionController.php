<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $req){
        if($req->session()->has('name')){
            echo $req->session()->get('name');
        }else{
            echo 'No Data in the session';
        }
    }
    public function storeSessionData(Request $req){
       $req->session()->put('name','Oshan') ;
       echo 'Data has been added to the session';
    }
    public function deleteSessionData(Request $req){
        $req->session()->forget('name');
        echo 'Data has been remove';
    }
}
