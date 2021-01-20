<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

// courses
Route::group(['prefix' => 'courses'], function(){
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

// teachers
Route::group(['prefix' => 'teachers'], function(){
    Route::get('/',function () {
        return view('coordinator.teachers');
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

// coordinators
Route::group(['prefix' => 'coordinators'], function(){
    Route::get('/',function () {
        return view('coordinator.coordinators');
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

// roles
Route::get('/coordinator', 'App\Http\Controllers\CoordinatorController@index')->name('coordinator')->middleware('coordinator');
Route::get('/teacher', 'App\Http\Controllers\TeacherController@index')->name('teacher')->middleware('teacher');
Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student')->middleware('student');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
