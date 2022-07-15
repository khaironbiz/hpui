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


Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
Route::get('/admin',[App\Http\Controllers\HomeController::class,'admin']);
Route::get('/admin/data',[App\Http\Controllers\HomeController::class,'index'])->name('example.data');
Route::get('/admin/data/add',[App\Http\Controllers\HomeController::class,'create'])->name('example.data.add');
Route::post('/admin/data/insert-data',[App\Http\Controllers\HomeController::class,'store'])->name('example.insert');
Route::get('/admin/data/{id}',[App\Http\Controllers\HomeController::class,'edit'])->name('example.edit');
Route::get('/admin/data/show/{id}',[App\Http\Controllers\HomeController::class,'show'])->name('example.edit');
Route::post('/admin/data/update/{id}',[App\Http\Controllers\HomeController::class,'update'])->name('example.update');
Route::post('/admin/data/delete/{id}',[App\Http\Controllers\HomeController::class,'destroy'])->name('example.destroy');

