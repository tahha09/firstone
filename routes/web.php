<?php

use App\Http\Controllers\ItiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/second", function () {
    return view("second");
});

//Route::get("/{num}", [ItiController::class, "PrintNumber"])->where('num', '[0-9]+');

//Route::get("/{var}", [ItiController::class, 'PrintString']);

use App\Http\Controllers\StudentController;
Route::get("/students",[StudentController::class ,'Students']);
Route::get("/students/create",[StudentController::class ,'CreateStudent']);
Route::get("/students/{id}",[StudentController::class ,'ShowStudentId'])->where('id','[0-9]+');
