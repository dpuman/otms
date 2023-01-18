<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\student\studentAuthController;
use App\Http\Controllers\student\studentController;

Route::middleware('student')->group(function ()
{
    Route::get('/student-dashboard/', [StudentAuthController::class,'dashboard'])->name('student.dashboard');
    Route::get('/student-logout/', [StudentAuthController::class,'logout'])->name('student.logout');
    Route::get('/student-all-courses/', [studentController::class,'allCourse'])->name('student.all-courses');
});

Route::post('/student-login/', [StudentAuthController::class,'login'])->name('student.login');
Route::post('/student-registration/', [StudentAuthController::class,'studentRegistration'])->name('student.registration');
