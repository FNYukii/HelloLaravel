<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\TopPageController::class)
->name('index');

Route::get('/create', function () {
    return view('Pages.CreatePage');
});

Route::get('/update/{commentId}', function () {
    return view('Pages.UpdatePage');
});

Route::get('/delete/{commentId}', function () {
    return view('Pages.DeletePage');
});
