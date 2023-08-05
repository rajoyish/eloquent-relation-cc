<?php

use App\Http\Controllers\AddressCreateController;
use App\Http\Controllers\AddressDestroyController;
use App\Http\Controllers\AddressEditController;
use App\Http\Controllers\AddressIndexController;
use App\Http\Controllers\AddressPatchController;
use App\Http\Controllers\AddressStoreController;
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

Route::get('/address', AddressIndexController::class);
Route::get('/address/create', AddressCreateController::class);
Route::post('/address', AddressStoreController::class);
Route::get('/address/edit', AddressEditController::class);
Route::patch('/address', AddressPatchController::class);
Route::delete('/address', AddressDestroyController::class);
