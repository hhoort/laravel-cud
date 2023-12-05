<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers \ customcontroller;
// use App\Http\Controllers\customcontroller;
// use App\Http\Controllers\formcontroller;
// use App\Http\Controllers\singleaction;
use App\Http\Controllers\formcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// parameter pass in Route::get("/", function () {
// Route::get('/home/{name?}/{age?}', function ($name = null , $age = null) {
//     return view('welcome')->with(compact('name' , 'age'));
    // $data = compact('name' , 'age')
    // print_r($data);
// });

// url route DirectoryRoute::get('')
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/logout', function () {
//     return view('logout');
// });

// Route::get('/home',[customcontroller::class,'index']);
// Route::get('/about',[customcontroller::class,'about']);

// Route::controller(customcontroller::class)->group(function(){
// Route::get('/','index')->name('home');
// Route::get('/about','about')->name('about');
// Route::get('/contact','contact')->name('contact');
// });
// Route::get('/welcome',singleaction::class)->name('home');
//  Route::get('/about',singleaction::class)->name('about');
//  Route::get('/contact',singleaction::class)->name('contact');

Route::get('/form',[formcontroller::class,'register']);
Route::post('/form',[formcontroller::class,'data']);
Route::get('/std/view',[formcontroller::class,'std_view']);


Route::get('/std/dlt/{id}',[formcontroller::class,'std_dlt']);

