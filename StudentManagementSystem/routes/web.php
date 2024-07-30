<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchesController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;



Route::get('/students',[StudentController::class,'index']);
Route::get('/students/create',[StudentController::class,'create']);
Route::post('/students',[StudentController::class,'store']);
Route::get('/students/{id}',[StudentController::class,'show']);
Route::get('/students/{id}/edit',[StudentController::class,'edit']);
Route::put('/students/{id}',[StudentController::class,'update']);
Route::delete('/students/{id}',[StudentController::class,'destroy']);


Route::get('/teachers',[TeacherController::class,'index']);
Route::get('/teachers/create',[TeacherController::class,'create']);
Route::post('/teachers',[TeacherController::class,'store']);
Route::get('/teachers/{id}',[TeacherController::class,'show']);
Route::get('/teachers/{id}/edit',[TeacherController::class,'edit']);
Route::put('/teachers/{id}',[TeacherController::class,'update']);
Route::delete('/teachers/{id}',[TeacherController::class,'destroy']);

// Route::get('/courses',[CourseController::class,'index']);
// Route::get('/courses/create',[CourseController::class,'create']);
// Route::post('/courses',[CourseController::class,'store']);
// Route::get('/courses/{id}',[CourseController::class,'show']);
// Route::get('/courses/{id}/edit',[CourseController::class,'edit']);
// Route::put('/courses/{id}',[CourseController::class,'update']);
// Route::delete('/courses/{id}',[CourseController::class,'destroy']);

Route::resource('/courses',CourseController::class);
Route::resource('/batches',BatchesController::class);
Route::resource('/enrollments',EnrollmentController::class);
Route::resource('/payments',PaymentController::class);
Route::get('report/report1/{pid}',[ReportController::class,'report1']);