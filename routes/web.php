<?php

use App\Http\Controllers\FlyController;
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

Route::get('/',[FlyController::class, 'homepage'])->name('homepage');
Route::get('/detailfly',[FlyController::class, 'detailfly'])->name('detailfly');
