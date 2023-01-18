<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;

use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminEnrollController;

use App\Http\Controllers\EnrollController;

use App\Http\Controllers\student\studentAuthController;
use App\Http\Controllers\student\studentController;

use App\Http\Controllers\AdminStudentController;

Route::get('/send-mail', [HomeController::class,'sendMail'])->name('send-mail');

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/training-category/{id}', [HomeController::class,'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class,'allTraining'])->name('training.all');
Route::get('/training-detail/{id}', [HomeController::class,'trainingDetail'])->name('training.detail');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class,'loginRegistration'])->name('login-registration');

Route::get('/training.enroll/{id}', [EnrollController::class,'index'])->name('training.enroll');
Route::post('/training-new-enroll/{id}', [EnrollController::class,'newEnroll'])->name('training.new-enroll');
Route::get('/training-complete-enroll/{id}', [EnrollController::class,'completeEnroll'])->name('training.complete-enroll');





Route::middleware('teacher')->group(function ()
{
    Route::get('/teacher/dashboard',[TeacherAuthController::class,'dashboard'])->name('teachers.dashboard');
    Route::post('/teacher/logout',[TeacherAuthController::class,'logout'])->name('teacher.logout');

    Route::get('/course/add',[CourseController::class,'index'])->name('course.add');
    Route::post('/course/create',[CourseController::class,'create'])->name('course.create');
    Route::get('/course/manage',[CourseController::class,'manage'])->name('course.manage');
    Route::get('/course/edit/{id}',[CourseController::class,'edit'])->name('course.edit');
    Route::post('/course/update/{id}',[CourseController::class,'update'])->name('course.update');
    Route::post('/course/delete/{id}',[CourseController::class,'delete'])->name('course.delete');
});

Route::get('/teacher/login',[TeacherAuthController::class,'index'])->name('teachers.login');
Route::post('/teacher/login',[TeacherAuthController::class,'login'])->name('teachers.login');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'] )->name('dashboard');

    Route::get('/teachers',[TeacherController::class,'index'] )->name('teacher');
    Route::get('/teachers/manage',[TeacherController::class,'manage'] )->name('teacher.manage');
    Route::post('/teacher/add',[TeacherController::class,'create'] )->name('teacher.add');

    Route::get('/teacher/edit/{id}',[TeacherController::class,'editTeacher'])->name('teacher.edit');
    Route::post('/teacher/update/{id}',[TeacherController::class,'updateTeacher'])->name('teacher.update');
    Route::post('/teacher/delete/{id}',[TeacherController::class,'deleteTeacher'])->name('teacher.delete');

    Route::get('/category/add',[CourseCategoryController::class,'index'])->name('category.add');
    Route::post('/category/create',[CourseCategoryController::class,'create'])->name('category.create');
    Route::get('/category/manage',[CourseCategoryController::class,'manage'])->name('category.manage');
    Route::get('/category/edit/{id}',[CourseCategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CourseCategoryController::class,'update'])->name('category.update');
    Route::post('/category/delete/{id}',[CourseCategoryController::class,'delete'])->name('category.delete');

    Route::get('/admin/manage-course',[AdminCourseController::class,'index'])->name('admin.manage-course');
    Route::get('/admin/course-detail/{id}',[AdminCourseController::class,'detail'])->name('admin.course-detail');
    Route::get('/admin/update-course-status/{id}',[AdminCourseController::class,'updateStatus'])->name('admin.update-course-status');
    Route::get('/admin/update-course-offer-status/{id}',[AdminCourseController::class,'updateOfferStatus'])->name('admin.update-course-offer-status');
    Route::post('/admin/update-course-offer-status/update/{id}',[AdminCourseController::class,'update'])->name('admin.update-course-offer-status.update');
    Route::get('/admin/course-delete/{id}',[AdminCourseController::class,'delete'])->name('admin.course-delete');

    Route::get('/admin/manage-enroll',[AdminEnrollController::class, 'index'])->name('admin.manage-enroll');
    Route::get('/admin/enroll-detail/{id}',[AdminEnrollController::class, 'detail'])->name('admin.enroll-detail');
    Route::get('/admin/edit-enroll-status/{id}',[AdminEnrollController::class, 'editStatus'])->name('admin.edit-enroll-status');
    Route::post('/admin/admin.update-enroll-status/{id}',[AdminEnrollController::class, 'updateStatus'])->name('admin.update-enroll-status');
    Route::get('/admin/delete-enroll/{id}',[AdminEnrollController::class, 'delete'])->name('admin.delete-enroll');

    Route::get('/admin/manage-student',[AdminStudentController::class, 'index'])->name('admin.manage-student');
    Route::get('/admin/student-detail/{id}',[AdminStudentController::class, 'detail'])->name('admin.student-detail');
    Route::get('/admin/student-status/{id}',[AdminStudentController::class, 'updateStatus'])->name('admin.student-status');
});
