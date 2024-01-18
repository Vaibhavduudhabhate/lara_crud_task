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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[\App\Http\Controllers\StudentController::class,'showStudentForm']);
Route::post('/addstudent',[\App\Http\Controllers\StudentController::class,'addStudent']);
Route::get('/students',[\App\Http\Controllers\StudentController::class,'showStudents']);
Route::get('/students/{id}/edit',[\App\Http\Controllers\StudentController::class,'editStudent'])->name('edit-student');
Route::post('/students/{id}/update',[\App\Http\Controllers\StudentController::class,'updateStudent'])->name('update-student');
Route::get('/students/{id}/delete',[\App\Http\Controllers\StudentController::class,'deleteStudent'])->name('delete-student');
