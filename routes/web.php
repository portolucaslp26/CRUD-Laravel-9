<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\User;
use App\Models\Book;


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

Route::resource('books', BookController::class)->only([
    'index', 'show', 'create'
]);

Route::post('books', [BookController::class, 'store']);

Route::put('/books/{id}', [BookController::class, 'update']);

Route::get('/books/{id}/edit', [BookController::class, 'edit']);

Route::delete('/books/{id}', [BookController::class, 'destroy']);





