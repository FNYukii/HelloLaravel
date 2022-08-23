<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.top');
});

Route::get('/create', function () {
    return view('Pages.create');
});
