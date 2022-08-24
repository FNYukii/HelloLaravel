<?php

use Illuminate\Support\Facades\Route;

// Top Page
Route::get('/', \App\Http\Controllers\TopPageController::class)
->name('topPage');

// Create Page
Route::get('/create', function () {
    return view('Pages.CreatePage');
})
->name('createPage');

Route::post('/createComment', \App\Http\Controllers\CreateCommentController::class)
->name('createComment');

// Update Page
Route::get('/update/{commentId}', \App\Http\Controllers\UpdatePageController::class)
->name('updatePage')
->where('commentId', '[0-9]+');

// Delete Page
Route::get('/delete/{commentId}', function () {
    return view('Pages.DeletePage');
});
