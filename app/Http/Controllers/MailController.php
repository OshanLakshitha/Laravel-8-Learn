<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details=[
            'title'=>'mail testing for laravel 8',
            'body'=>'this is testing email sendin gmail'
        ];

        Mail::to('oshanlakshitha46@gmail.com')->send(new TestMail($details));
        return "Email send";
    }
}
