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

Route::get('/', [\App\Http\Controllers\TodoController::class, 'create'])->name('create-todo');

Route::post('/save-todo', [\App\Http\Controllers\TodoController::class, 'save'])->name('save-todo');

Route::get('/list', function () {

    return view('todo.list-todo');
});