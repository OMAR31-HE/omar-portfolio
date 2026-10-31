<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');
