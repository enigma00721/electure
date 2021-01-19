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

    Route::get('/','App\Http\Controllers\CoordinatorController@index');
    
    // courses
    Route::group(['prefix' => 'courses'], function()
    {
        Route::get('/',function () {
            return view('coordinator.courses');
        });
        // Route::post('/',function () {
        //     return view('coordinator.courses');
        // });
        // Route::put('/{id}',function () {
        //     return view('coordinator.courses');
        // });
        // Route::delete('/{id}',function () {
        //     return view('coordinator.courses');
        // });
    });
});

// roles
Route::get('/coordinator', 'App\Http\Controllers\CoordinatorController@index')->name('coordinator')->middleware('coordinator');
Route::get('/teacher', 'App\Http\Controllers\TeacherController@index')->name('teacher')->middleware('teacher');
Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student')->middleware('student');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
