<?php

use App\Http\Controllers\ItiController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\StudentController;
Route::get('/app',function(){
    return view("layout.App");
});

Route::get("/app/students", [StudentController::class, 'Students']);
Route::get("/app/create", [StudentController::class, 'CreateStudent']);
Route::get("/app/students/{id}", [StudentController::class, 'ShowStudentId'])->where('id', '[0-9]+');
Route::post('/app/students/store', [StudentController::class, 'Store'])->name('students.store');

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
