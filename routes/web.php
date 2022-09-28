<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/countries', function () {
    return view('countries');
});

//Route::get('/register', function () {
//    return view('register');
//});

Route::view('/register', 'register')->name('register');
Route::view('/registration-success', 'registration-success')->name('registration.success');
