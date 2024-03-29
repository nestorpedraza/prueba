<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProyectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CommentController;

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

Route::get('/', function () {
    return view('users.index');
})->name('users.index');


Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/storeuser', [UserController::class, 'store'])->name('users.store');
Route::post('/storelogin', [UserController::class, 'storelogin'])->name('users.storelogin');
Route::get('/users', [UserController::class, 'show'])->name('users.show')->middleware('auth');
Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');
Route::get('/proyectsindex', [ProyectController::class, 'index'])->name('proyects.index')->middleware('auth');
Route::get('/proyectscreate', [ProyectController::class, 'create'])->name('proyects.create')->middleware('auth');
Route::get('/proyectsedit/{id}', [ProyectController::class, 'edit'])->name('proyects.edit')->middleware('auth');
Route::get('/proyectsdestroy/{id}', [ProyectController::class, 'destroy'])->name('proyects.destroy')->middleware('auth');
Route::post('/proyectsupdate/{id}', [ProyectController::class, 'update'])->name('proyects.update')->middleware('auth');
Route::post('/proyectsstore', [ProyectController::class, 'store'])->name('proyects.store')->middleware('auth');
Route::get('/taskindex/{id}', [TaskController::class, 'index'])->name('tasks.index')->middleware('auth');
Route::get('/taskcreate/{id}', [TaskController::class, 'create'])->name('tasks.create')->middleware('auth');
Route::post('/taskstore', [TaskController::class, 'store'])->name('tasks.store')->middleware('auth');
Route::get('/taskedit/{id}', [TaskController::class, 'edit'])->name('tasks.edit')->middleware('auth');;
Route::post('/taskupdate/{id}', [TaskController::class, 'update'])->name('tasks.update')->middleware('auth');
Route::get('/taskdestroy/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy')->middleware('auth');
Route::get('/taskshow/{id}', [TaskController::class, 'show'])->name('tasks.show')->middleware('auth');
Route::get('/commentcreate/{id}', [CommentController::class, 'create'])->name('comments.create')->middleware('auth');
Route::post('/commentstore', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
//Route::resource('/proyectos', ProyectController::class)->middleware('auth');
//Route::resource('tiendas', TiendaController::class)->middleware('auth');

