<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Penginapan\PenginapanController;
use App\Http\Controllers\Wisata\WisataController;
use App\Http\Controllers\City\CityController;
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

Route::post('/addpenginapan', [PenginapanController::class,'addPenginapan']);
Route::put('/editpenginapan', [PenginapanController::class,'updatePenginapan']);
Route::delete('/deletepenginapan', [PenginapanController::class,'deletePenginapan']);

Route::post('/addwisata', [WisataController::class, 'addWisata']);
Route::put('/editwisata', [WisataController::class, 'updateWisata']);
Route::delete('/deletewisata', [WisataController::class, 'deleteWisata']);

Route::post('/addcity', [CityController::class,'addCity']);
Route::put('/editcity', [CityController::class,'updateCity']);
Route::delete('/deletecity', [CityController::class,'deletecity']);
