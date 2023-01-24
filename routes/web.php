<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
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

Route::get('/', function () {
    $all_tasks = Task::all();
    return view('welcome', compact('all_tasks'));
});

Route::post('store', [TaskController::class, 'store'])->name('store.task');
Route::get('delete/{id}', [TaskController::class, 'destroy'])->name('delete.task');
