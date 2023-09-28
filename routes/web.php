<?php

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

Route::get('servers/add-server', [ServerController::class, 'show']);
Route::post('servers/add-server', [ServerController::class, 'create'])->name('server.create');


