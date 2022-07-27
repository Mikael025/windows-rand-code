<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\BarangController;

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

Route::get('/home',[WebController::class,'home'])->name('home');

// Barang
Route::get('/create',[WebController::class,'create']);
Route::post('/store',[BarangController::class,'store']);
// update barang
Route::get('/edit/{id}',[BarangController::class,'edit']);
Route::post('/update/{id}',[BarangController::class,'update']);
//delete barang
Route::get('/delete/{id}',[BarangController::class,'destroy']);
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
