<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\StatisticController;
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


Route::pattern('hash', '\w{5}');


Route::get('/add', [LinkController::class, 'add'])->name('link.add');
Route::post('/store', [LinkController::class, 'store'])->name('link.store');
Route::get('/{hash}+', [LinkController::class, 'show'])->name('link.show');
Route::get('/{hash}', [LinkController::class, 'redirectTo'])->name('link.redirectTo')->middleware('statistic-link');

Route::get('/statistics/{hash}', [StatisticController::class, 'index'])->name('statistics.index');
Route::post('/statistics/view/{id}', [StatisticController::class, 'show'])->name('statistics.show');
