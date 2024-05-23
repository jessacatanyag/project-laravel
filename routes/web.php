<?php

use App\Http\Controllers\Allcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [Allcontroller::class, 'welcome']);

Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');

Route::get('/student', function () {
    return view('student.student');
})->name('student');

Route::get('/facilitator', function () {
    return view('facilitator.facilitator');
})->name('facilitator');
