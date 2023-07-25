<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\XfcController;
use App\Http\Controllers\PajeroController;
use App\Http\Controllers\XpanderController;
use App\Http\Controllers\XpanderCrossController;
use App\Http\Controllers\ColtL300Controller;

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
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::get('/xfc', [XfcController::class, 'index'])->name('xfc.index');
Route::get('/new-pajero-sport', [PajeroController::class, 'index'])->name('pajero.index');
Route::get('/new-xpander', [XpanderController::class, 'index'])->name('xpander.index');
Route::get('/new-xpander-cross', [XpanderCrossController::class, 'index'])->name('xpander_cross.index');
Route::get('/colt-l300', [ColtL300Controller::class, 'index'])->name('colt_l300.index');
