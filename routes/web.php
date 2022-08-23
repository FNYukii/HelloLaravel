<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.top');
});

Route::get('/create', function () {
    return view('Pages.create');
});

Route::get('/update/{commentId}', function () {
    return view('Pages.update');
});

Route::get('/delete/{commentId}', function () {
    return view('Pages.delete');
});
