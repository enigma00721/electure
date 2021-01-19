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

Auth::routes();

Route::group(['prefix' => 'coordinator', 'middleware' => 'coordinator'], function()
{
    // Your routes

    Route::get('/','App\Http\Controllers\CoordinatorController@index');
});

// roles
Route::get('/coordinator', 'App\Http\Controllers\CoordinatorController@index')->name('coordinator')->middleware('coordinator');
Route::get('/teacher', 'App\Http\Controllers\TeacherController@index')->name('teacher')->middleware('teacher');
Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student')->middleware('student');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
