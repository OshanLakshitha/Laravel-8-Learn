<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ProductController::class,'index'])->name('product.index') ;

Route::get('/home/{name?}', [HomeController::class,'index'])->name('home.index');

//view render controller
Route:: get('/user',[UserController::class,'index'])->name('user.index');

Route::get('/fluent-string',[FluentController::class,'index'])->name('fluent-string.index');

//login form routing
Route::get('/login',[LoginController::class,'index'])->name('login.index');

//login form routing
Route::post('/login',[LoginController::class,'loginSubmit'])->name('loginSubmit');

//only one pagerequest check middleware 
//Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');

//get session data
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');

//set session data
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');

//delete session
Route::get('/session/delete',[SessionController::class,'deleteSessionData'])->name('session.delete');

//get database value
Route::get('/post',[PostController::class,'getAllPost'])->name('post.getAllPost');

Route::get('/addpost',[PostController::class,'addPost'])->name('post.add');

Route::post('/addpost',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/post/{id}',[PostController::class,'getPostById'])->name('post.getbyid');

Route::get('/postDelete/{id}',[PostController::class,'deletePost'])->name('post.delete');

Route::get('/update-post/{id}',[PostController::class,'updatePost'])->name('post.update');

Route::post ('/update-post',[PostController::class,'updatePosts'])->name('post.updated');

Route::get('/inner-join',[PostController::class,'innerJoinCaluse'])->name('post.innerJoin');

Route::get('/left-join',[PostController::class,'leftJoin'])->name('post.leftJoin');

Route::get('/right-join',[PostController::class,'rightJoin'])->name('post.rightJoin');

Route::get('/all-post',[PostController::class,'getAllPostUsingModel'])->name('post.getAllPostUsingModel');

Route::get('/test' ,function(){
    return view('test');
});