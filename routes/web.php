<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home 
Route::get('/', [HomeController::class, 'index'])->name('home');

//student
Route::prefix('/student')->group(function () {
    
    Route::get('/', [StudentController::class, 'index'])->name('student');
    Route::post('/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/{task_id}delete', [StudentController::class, 'delete'])->name('student.delete');
    Route::get('/{task_id}done', [StudentController::class, 'done'])->name('student.done');

});


