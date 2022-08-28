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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Top Page
Route::get('/', \App\Http\Controllers\TopPageController::class)
->name('topPage');

// Create Page
Route::get('/create', function () {
    return view('Pages.CreatePage');
})
->name('createPage');

Route::post('/createComment', \App\Http\Controllers\CreateCommentController::class)
->middleware('auth')
->name('createComment');

// Update Page
Route::get('/update/{commentId}', \App\Http\Controllers\UpdatePageController::class)
->name('updatePage')
->where('commentId', '[0-9]+');

Route::post('/updateComment', \App\Http\Controllers\UpdateCommentController::class)
->name('updateComment');

// Delete Page
Route::get('/delete/{commentId}', \App\Http\Controllers\DeletePageController::class)
->name('deletePage')
->where('commentId', '[0-9]+');

Route::post('/deleteComment', \App\Http\Controllers\DeleteCommentController::class)
->name('deleteComment');