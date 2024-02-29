<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TradesController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/trades', [TradesController::class, 'index'])->name('trades.index');
Route::get('/trades/add', [TradesController::class, 'add'])->name('trades.add');
Route::get('/trades', [TradesController::class, 'store,'])->name('trades.store');
