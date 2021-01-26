<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// dynamic dashboard route
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

// coordinators
Route::group(['prefix' => 'coordinators'], function(){
    Route::get('/',function () {
        return view('coordinator.coordinators');
    });
});

// teacher
Route::resource('teacher', TeacherController::class,[
    'names' => [
        'index' => 'teacher',
        'store' => 'teacher.new',
        'update' => 'teacher.update',
        'destroy' => 'teacher.delete',
    ]
]);

// roles
Route::get('/coordinator', 'App\Http\Controllers\CoordinatorController@index')->name('coordinator')->middleware('coordinator');
// Route::get('/teacher', 'App\Http\Controllers\TeacherController@index')->name('teacher')->middleware('teacher');
Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student')->middleware('student');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('courses', 'App\Http\Controllers\CourseController');