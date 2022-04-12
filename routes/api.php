<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Host\HostController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);

Route::post('/adduser', [UserController::class,'addUser']);
Route::put('/edituser', [UserController::class,'updateUser']);
Route::delete('/deleteuser', [UserController::class,'deleteUser']);

Route::post('/addplace', [HostController::class,'addPlace']);
Route::put('/editplace', [HostController::class,'updatePlace']);
Route::delete('/deleteplace', [HostController::class,'deleteplace']);
