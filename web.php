<?php

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
// use App\Http\Controllers\loaidichvucontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('_layout_home');
// });

Route::get('/lichhen', function () {
    return view('user_homee.lichhen');
});

Route::get('/home', function () {
    return view('user_homee.index');
});

Route::get('/admin', function () {
    return view('_layout_admin');
});

Route::get('/admin/Loaisanphams', function () {
    return view('admin.Loaisanpham');
});

Route::get('/admin/Loaidichvus', function () {
    return view('admin.Loaidichvu');
});

Route::get('/admin/Dichvus', function () {
    return view('admin.Dichvu');
});


Route::get('/', function () {
    return view('index');
});

//2
Route::get('/admin/Gias', function () {
    return view('admin.Gia');
});

//3
Route::get('/admin/Nhanviens', function () {
    return view('admin.Nhanvien');
});

// 4
Route::get('/admin/Khachhangs', function () {
    return view('admin.Khachhang');
});

// 5
Route::get('/admin/Nhacungcaps', function () {
    return view('admin.Nhacungcap');
});

// 6
Route::get('/admin/Baiviets', function () {
    return view('admin.Baiviet');
});

// 7
Route::get('/admin/Users', function () {
    return view('admin.Usres');
});

// 8
Route::get('/admin/Thes', function () {
    return view('admin.The');
});

// 9
Route::get('/admin/Datlichs', function () {
    return view('admin.Datlich');
});

// 10
Route::get('/admin/Donbans', function () {
    return view('admin.Donban');
});

// 11
Route::get('/admin/Donnhaps', function () {
    return view('admin.Donnhap');
});

// 12
Route::get('/admin/Chitietbans', function () {
    return view('admin.Chitietban');
});

// 13
Route::get('/admin/Chitietnhaps', function () {
    return view('admin.Chitietnhap');
});

// 14
Route::get('/admin/Sanphams', function () {
    return view('admin.Sanpham');
});

// Route::get('/admin/Loaidichvus', [loaidichvucontroller::class, 'index']);
// // Route::get('/admin/sanpham', [sanphamcontroller::class, 'create']);
// Route::get('/admin/Loaidichvus/{id}/show', [loaidichvucontroller::class, 'show']);
// Route::get('/admin/Loaidichvus/{id}/delete', [loaidichvucontroller::class, 'destroy']);
// Route::post('/admin/Loaidichvus/update', [loaidichvucontroller::class, 'update']);
