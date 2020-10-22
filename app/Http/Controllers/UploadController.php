<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function uploadFile(Request $req){
        $req->file->store('public');
        return "file has been upload successfully";
    }
}
