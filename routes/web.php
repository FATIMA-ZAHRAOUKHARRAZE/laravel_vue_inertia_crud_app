<?php

use App\Http\Controllers\TaskController;
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

Route::get('/',[TaskController::class,'index'])->name('home');
Route::get('category/{category}/tasks',[TaskController::class,'getTasksCategory'])->name('category.tasks');
Route::get('order/{column}/{direction}/tasks',[TaskController::class,'getTasksOrderedBy'])->name('order.tasks');