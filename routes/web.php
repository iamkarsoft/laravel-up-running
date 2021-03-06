<?php

use App\Http\Controllers\TasksController;
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
// 	return view('welcome');
// });

// Route::get('welcome', [WelcomeController::class, 'index'])->name('welcome');

// task controller
Route::get('/', [TasksController::class, 'index']);
Route::get('tasks/create', [TasksController::class, 'create']);
Route::post('tasks', [TasksController::class, 'store']);
