<?php

use Illuminate\Support\Facades\Route;

// Auth routes
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/auth/register', function () {
    return view('auth.register');
});
Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/admin/app/dashboard', function () {
    return view('admin.app.dashboard');
});