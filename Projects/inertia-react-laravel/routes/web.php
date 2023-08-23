<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use Inertia\Inertia;

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


Route::controller(ProductController::class)->group(function () {
    Route::get('/','HomePage')->name('HomePage');
    Route::get('/products','Products')->name('Products');
    Route::get('/product/create','ProductCreeate')->name('ProductCreeate');
    Route::get('/product/{id}/edit','ProductEdit')->name('ProductEdit');
    Route::post('/product/store','ProductStore')->name('ProductStore');
    Route::post('/product/update','ProductUpdate')->name('ProductUpdate');
    Route::delete('/product/delete/{id}','ProductDelete')->name('ProductDelete');
    Route::get('/products/all', [ProductController::class, 'ProductLoadLit']);
});


Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
