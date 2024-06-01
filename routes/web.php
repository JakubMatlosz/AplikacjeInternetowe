<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

Route::get('/', [CourseController::class, 'home']);
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/courses/create', [CourseController::class, 'create']);
    Route::post('/courses', [CourseController::class, 'store']);
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
    Route::put('/courses/{course}', [CourseController::class, 'update']);
    Route::delete('/courses/{course}', [CourseController::class, 'destroy']);

    Route::get('/teachers/create', [TeacherController::class, 'create']);
    Route::post('/teachers', [TeacherController::class, 'store']);
    Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit']);
    Route::put('/teachers/{teacher}', [TeacherController::class, 'update']);
    Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy']);
});
