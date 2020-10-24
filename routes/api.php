<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// (http://127.0.0.1:8000/api/users) call normal method calling
/*Route::get('/users',function(){
    return "Hi user";
});*/

//(http://127.0.0.1:8000/api/users/jone) parameter passing
/*Route::get('/users/{name}',function($name){
    return "Hi user" . $name;
});
*/

//call null value
/*Route::get('/users/{name?}',function($name=null){
    return "Hi user" . $name;
});*/

//with out call numbers
Route::get('/users/{name?}',function($name=null){
    return "Hi user" . $name;
});

//only pass numbes parameters
Route::get('/usersID/{id?}',function($id=null){
    return "Hi user" . $id;
});

//Restric get request and post request only 
Route::match(['get','post'],'/students',function(Request $req){
    return "Request methods is". $req->method();
});

// any request formate can reqested
Route::any('/post',function(Request $req){
    return "Request methods is". $req->method();
});