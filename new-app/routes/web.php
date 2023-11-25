<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\teamcontroller;
use App\Http\Controllers\servicecontroller;

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

Route::get('/home', [welcomecontroller::class, 'index']);
Route::get('/about', [aboutcontroller::class, 'about']);
Route::get('/team', [teamcontroller::class, 'team']);
Route::get('/service', [servicecontroller::class, 'service']);