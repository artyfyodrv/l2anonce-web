<?php

use App\Http\Controllers\Api\V1\ApiServerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('v1/servers/create', [ApiServerController::class, 'create']);
Route::get('v1/servers/get/{id}', [ApiServerController::class, 'getOne']);
Route::post('v1/servers/edit/{id}', [ApiServerController::class, 'edit']);

