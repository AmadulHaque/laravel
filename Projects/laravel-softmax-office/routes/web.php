<?php

use App\Events\NewMessage;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student\StudentController;
use App\Http\Controllers\Dashboard\DashboardController;

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
    // Redis::publish('channel',json_encode(['event'=>'newMsg','data'=>['body' => "hello test"]]));
    return view('welcome');
    // abort(404);
});
 

# protecting admin routes
Route::group(['middleware' => 'auth:admin'], function () {

    //Dashboard
    Route::group(['namespace' => 'App\Http\Controllers\Dashboard',], function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard','dashboard')->name('admin.dashboard');
            Route::get('/dashboard/teacher','teacherDashboard')->name('teacher.dashboard');
            Route::get('/dashboard/student','studentDashboard')->name('student.dashboard');
            Route::get('/dashboard/sales','salesDashboard')->name('sales.dashboard');
            Route::get('/dashboard/member','memberDashboard')->name('member.dashboard');
        });
    });


    Route::resource('/student',StudentController::class);



});
