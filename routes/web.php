<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Servers\ServerController;
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

Route::get('/', [IndexController::class, 'show']);
Route::get('servers/add', [ServerController::class, 'show']);
Route::post('servers/add', [ServerController::class, 'create'])->name('server.create');

Route::get('servers/{id}/edit', [ServerController::class, 'showEditForm']);
Route::patch('servers/edit/{id}/submit', [ServerController::class, 'edit'])->name('server.edit');


