<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    return view ('home', [
        "title"=>"Home",
        "active"=>'home',
        "user" => User::all()
    ]);
});

Route::get('/kelas', function () {
    return view('class', [
        "title" => "Kelas",
        "active" => "Kelas"
    ]);
});

Route::get('/mentor', function () {
    return view('mentor', [
        "title" => "mentor",
        "active" => "mentor"
    ]);
});

Route::get('/daftar', function () {
    return view('register.index', [
        "title" => "Daftar",
        "active" => "Daftar"
    ]);
});

Route::get('/masuk', function () {
    return view('login.index', [
        "title" => "Masuk",
        "active" => "Masuk"
    ]);
});

Route::get('/diskon', function () {
    return view('discount', [
        "title" => "Diskon",
        "active" => "Diskon"
    ]);
});