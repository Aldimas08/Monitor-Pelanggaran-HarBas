<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelanggaranController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('login.before-login');
});

Route::get('/welcome', function () {
    return view('layouts.web');
});
=======
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran');


>>>>>>> 7d0edfad009cc9b753ba8d1c6f41f31b089a0338
