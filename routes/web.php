<?php

use App\Http\Controllers\Host\HostController;
use App\Http\Controllers\User\UserController;
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

Route::get('home', [UserController::class,'getUser']);
Route::get('host', [HostController::class,'getHost']);
Route::get('hostlist', [HostController::class,'getHostList']);
Route::get('tableuser', [UserController::class,'getTableUser']);

Route::get('edithost', [HostController::class,'editHostList']);

Route::get('dashboard', [UserController::class,'getaAdmin']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});