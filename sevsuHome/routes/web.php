<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
});
Route::view('/grocery', 'grocery');
Route::get('/page', [PageController::class, 'index'])->name('page');
Route::post('/grocery/post', 'GroceryController@store');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
