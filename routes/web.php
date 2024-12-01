<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServvoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ServvoController::class, 'index'] )->name('index.index');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('/homeadmin', [AdminController::class, 'index'] )->name('admin.index')->middleware('auth');

Route::get('/create', [ServvoController::class, 'create'])->name('index.create');
route::post('/produk/store', [ServvoController::class, 'store'])->name('index.store');

route::get('/edit{id}', [AdminController::class, 'edit'])->name('admin.edit');
route::put('/update{id}', [AdminController::class, 'update'])->name('admin.update');