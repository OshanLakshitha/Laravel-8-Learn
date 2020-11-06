<?php

namespace App\Http\Controllers;

use App\Models\phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertRecord(){
        $phone=new phone();
        $phone->phone="1234567890";
        $user=new User();
        $user->name="oshan";
        $user->email="oshanlakshitha46@gmail.com";
        $user->password=encrypt('oshan12');

        $user->save();
        $user->phone()->save($phone);
        return "Recode has been create successfully";
    }

    public function fetchPhoneByUserId($id){
        $phone=User::find($id)->phone;
        return $phone;
    }
}
