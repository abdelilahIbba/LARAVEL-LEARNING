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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Salam', function () {
    $Fname = "Abdelilah";
    $Lname = "El Ibbawi";
    return view('salam', [
        'Fname' => $Fname,
        'Lname' => $Lname,
        'courses' => ["LARAVEL", "VUE JS", "C++"]
    ]);
});
