<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'show'])->name('show');

Route::get('/create', [MovieController::class, 'create'])->name('create');

Route::post('/store', [MovieController::class, 'store'])->name('store');

Route::get('/edit/{id}', [MovieController::class, 'edit'])->name('edit');

Route::patch('/update/{id}', [MovieController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [MovieController::class, 'delete'])->name('delete');