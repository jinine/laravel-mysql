<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentscontroller;
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

Route::get('students', [studentscontroller::class, 'index'])->name('students.index');
Route::get('students/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('students/store', [StudentsController::class, 'store'])->name('students.store');
Route::get('students/show/{id}', [StudentsController::class, 'show'])->name('students.show');
Route::get('students/edit/{id}', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('students/update', [StudentsController::class, 'update'])->name('students.update');
Route::get('students/destroy/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');
Route::get('/', function () {
    return view('welcome');
});
