<?php

use App\Livewire\User;
use App\Livewire\Kegiatan;
use App\Livewire\Keuangan;
use App\Livewire\Dashboard;
use App\Livewire\Transaksi;
use App\Livewire\User\Role;
use App\Livewire\UserIndex;
use App\Livewire\Master\Saldo;
use App\Livewire\Pemeliharaan;
use App\Livewire\User\ListRole;
use App\Livewire\User\Permission;
use App\Livewire\Master\Kendaraan;
use App\Livewire\Master\Perawatan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('show-picture', [HelperController::class, 'showPicture'])->name('helper.show-picture');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::post('/cetak', [DashboardController::class, 'cetak'])->name('cetak');

    Route::get('dashboard', Dashboard::class)->name('dashboard');


    // Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    //     Route::get('list-role', ListRole::class)->name('list-role');
    //     Route::get('permission', Permission::class)->name('permission');
    //     Route::get('role/{id?}', Role::class)->name('role');
    // });

    Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
        Route::get('kendaraan', Kendaraan::class)->name('kendaraan');
        Route::get('perawatan', Perawatan::class)->name('perawatan');
        Route::get('saldo', Saldo::class)->name('saldo');
        Route::get('user-index', UserIndex::class)->name('user-index');
        Route::get('user/{id?}', User::class)->name('user');
    });

    Route::get('pemeliharaan', Pemeliharaan::class)->name('pemeliharaan');
    Route::get('kegiatan', Kegiatan::class)->name('kegiatan');
    Route::get('keuangan', Keuangan::class)->name('keuangan');
    Route::get('transaksi/{id?}', Transaksi::class)->name('transaksi');

});
