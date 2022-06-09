<?php

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

use App\Http\Controllers\Sanphamcontroller;
use App\Http\Controllers\loaidichvucontroller;
use App\Http\Controllers\Dichvucontroller;
use App\Http\Controllers\Loaisanphamcontroller;
use App\Http\Controllers\Giacontroller;

use App\Http\Controllers\Nhanviencontroller;
use App\Http\Controllers\Khachhangcontroller;
use App\Http\Controllers\Nhacungcapcontroller;

use App\Http\Controllers\donbancontroller;
use App\Http\Controllers\donnhapcontroller;
use App\Http\Controllers\chitietbancontroller;
use App\Http\Controllers\chitietnhapcontroller;

use App\Http\Controllers\Baivietcontroller;
use App\Http\Controllers\Datlichcontroller;
use App\Http\Controllers\Thecontroller;
use App\Http\Controllers\Userscontroller;

Route::resource('', Sanphamcontroller::class);

Route::resource('Sanphams', Sanphamcontroller::class);
Route::resource('Loaisanphams', Loaisanphamcontroller::class);

Route::resource('Dichvus', Dichvucontroller::class);
Route::resource('Loaidichvus', Loaidichvucontroller::class);

Route::resource('Khachhangs', Khachhangcontroller::class);
Route::resource('Nhanviens', Nhanviencontroller::class);
Route::resource('Nhacungcaps', Nhacungcapcontroller::class);

Route::resource('Gias', Giacontroller::class);

Route::resource('Donbans', donbancontroller::class);
Route::resource('Donnhaps', donnhapcontroller::class);
Route::resource('Chitietbans', chitietbancontroller::class);
Route::resource('Chitietnhaps', chitietnhapcontroller::class);

Route::resource('Thes', Thecontroller::class);
Route::resource('Baiviets', Baivietcontroller::class);
Route::resource('Datlichs', Datlichcontroller::class);
Route::resource('Users', Usercontroller::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
