<?php

use App\Livewire\User\Role;
use App\Livewire\User\ListRole;
use App\Livewire\User\Permission;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Master\Kendaraan;
use App\Livewire\Master\Perawatan;
use App\Livewire\Pemeliharaan;
use App\Livewire\Transaksi;

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::resource('register', RegisterController::class);

Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('list-role', ListRole::class)->name('list-role');
        Route::get('permission', Permission::class)->name('permission');
        Route::get('role/{id?}', Role::class)->name('role');
    });

    Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
        Route::get('kendaraan', Kendaraan::class)->name('kendaraan');
        Route::get('perawatan', Perawatan::class)->name('perawatan');
    });

    Route::get('pemeliharaan', Pemeliharaan::class)->name('pemeliharaan');
    Route::get('transaksi/{id?}', Transaksi::class)->name('transaksi');


});
