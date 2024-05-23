<?php

use App\Http\Controllers\Allcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Allcontroller::class, 'welcome']);

Route::get('/admin', function () {
    return view('admin.login');
})->name('admin');


Route::get('/student', function () {
    return view('student.student');
})->name('student');

Route::get('/facilitator', function () {
    return view('facilitator.facilitator');
})->name('facilitator');
Route::post('/admin.login', 'Auth\adminLoginController@admin.login')->name('admin.login');

