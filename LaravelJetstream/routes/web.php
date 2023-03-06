<?php

use App\Http\Controllers\DBController;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('db',[DBController::class, 'index'])->name('db');

    Route::post('add', [DBController::class, 'store'])->name('add');

    Route::put('editar/{id}', [DBController::class, 'update'])->name('editar');

    Route::get('eliminar/{id}', [DBController::class, 'destroy'])->name('eliminar');

    Route::get('crear', [DBController::class, 'create'])->name('crear');

    Route::get('editar/{id}', [DBController::class, 'edit'])->name('editar');
});
