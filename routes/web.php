<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;


// Default page → Login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');

// Login Routes
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');


Route::prefix('crud')->group(function () {

    Route::get('/', [CrudController::class, 'index'])->name('crud.index');
    Route::get('/create', [CrudController::class, 'create'])->name('crud.create');
    Route::post('/', [CrudController::class, 'store'])->name('crud.store'); // POST /crud

    Route::get('/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
    Route::put('/{id}', [CrudController::class, 'update'])->name('crud.update'); // PUT /crud/{id}

    Route::delete('/{id}', [CrudController::class, 'destroy'])->name('crud.destroy'); // DELETE

Route::get('/crud/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::put('/crud/{id}', [CrudController::class, 'update'])->name('crud.update');
Route::delete('/crud/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');

});
