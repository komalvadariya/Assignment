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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('viewallproduct');
});
Route::get('/Add', function () {
    return view('add');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/product', [App\Http\Controllers\productController::class, 'index']);
Route::post('/saveproduct', [App\Http\Controllers\productController::class, 'store']);
Route::any('/editproduct/{pid}', [App\Http\Controllers\productController::class, 'edit']);
Route::any('/updateproduct/{pid}', [App\Http\Controllers\productController::class, 'update']);
Route::any('/deleteproduct/{pid}', [App\Http\Controllers\productController::class, 'delete']);

Route::view('/templet','templet');
Route::view('/admindashboard','admin.admindashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
