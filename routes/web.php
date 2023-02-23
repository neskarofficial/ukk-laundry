<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('login',[LoginController::class,'view'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class,'proses'])->name('login.proses')->middleware('guest');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

//register
Route::get('register',[RegisterController::class,'view'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class,'proses'])->name('register.proses')->middleware('guest');

//dashboard
route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin')->middleware('auth', 'role:admin');
route::get('/dashboard/kasir', [DashboardController::class, 'kasir'])->name('dashboard.kasir')->middleware('auth', 'role:kasir');
route::get('/dashboard/owner', [DashboardController::class, 'owner'])->name('dashboard.owner')->middleware('auth', 'role:owner');
 
Route::view('error/403', 'error.403')->name('error.403');

route::resource('outlet', OutletController::class)->middleware('auth', 'role:admin');
route::resource('paket', PaketController::class);
route::resource('member', MemberController::class);
// route::resource('transaksi', TransaksiController::class);

Route::middleware(['auth', 'role:kasir'])->group(function () {
    Route::post('transaksi/baru', [TransaksiController::class, 'create'])->name('transaksi.baru');
    Route::get('transaksi/{transaksi}', [TransaksiController::class, 'edit'])->name('transaksi.proses');
    Route::post('transaksi/simpan', [TransaksiController::class, 'store'])->name('transaksi.store');
    // Route::post('transaksi/', [TransaksiController::class, 'index'])->name('transaksi.index');

});