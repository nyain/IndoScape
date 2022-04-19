<?php
use App\Http\Controllers\Penginapan\PenginapanController;
use App\Http\Controllers\Wisata\WisataController;
use App\Http\Controllers\City\CityController;
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
    return view('register');
});



Route::get('welcome', [UserController::class,'getUser']);

Route::get('penginapan', [PenginapanController::class,'getPenginapan']);
Route::get('penginapanlist', [PenginapanController::class,'getPenginapanList']);

Route::get('wisata', [WisataController::class, 'getWisata']);
Route::get('wisatalist', [WisataController::class, 'getWisataList']);


Route::get('tambahKota', [CityController::class,'getCity']);
Route::get('kota', [CityController::class,'getCityList']);
Route::get('editkota', [CityController::class,'editCity']);

Route::get('tableuser', [UserController::class,'getTableUser']);

Route::get('edituser', [UserController::class,'editUser']);
Route::get('edithost', [HostController::class,'editHost']);
Route::get('editpenginapan', [PenginapanController::class,'editPenginapan']);

Route::get('editwisata', [WisataController::class,'editWisata']);

Route::get('dashboard', [UserController::class,'getaAdmin']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});