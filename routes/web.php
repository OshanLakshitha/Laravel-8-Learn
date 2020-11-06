<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/student', [StudentsController::class,'fetchStudents']);

Route::get('/add-post', [PostController::class,'addPost']);
Route::post('/add-post', [PostController::class,'createPost'])->name('post.create');
Route::get('/posts', [PostController::class,'getPost']);
Route::get('/post/{id}', [PostController::class,'getPostById']);
Route::get('/delete-post/{id}', [PostController::class,'deletePost']);
Route::get('/update-post/{id}', [PostController::class,'updatePost']);
Route::post('/update-post', [PostController::class,'updateingPost'])->name('update.post');

Route::get('/add-user',[UserController::class,'insertRecord']);
Route::get('/get-phone/{id}',[UserController::class,'fetchPhoneByUserId']);
