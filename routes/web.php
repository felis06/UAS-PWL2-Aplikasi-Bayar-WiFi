<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return redirect('/app');
});


Route::prefix('/auth')->group(function () {
    Route::get('/login', [AuthController::class, 'loginPage'])->name("auth.login");
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'registerPage'])->name("auth.register");
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/app', [AuthController::class, 'appPage'])->name('app');
    Route::get('/app/pulsa', [ServiceController::class, 'pulsaPage'])->name('pulsa');
    Route::post('/app/buat-transaksi', [ServiceController::class, 'buatTransaksi'])->name('buat-transaksi');
    Route::get('/app/pembayaran/{id}', [ServiceController::class, 'pembayaranPage'])->name('pembayaran');
    Route::get('/app/transfer', [ServiceController::class, 'transferPage'])->name('transfer');
    Route::post('/app/transfer-detail', [ServiceController::class, 'transferDetailPage'])->name('transfer-detail');
    Route::get('/app/transfer-approval/{id}', [ServiceController::class, 'transferPinPage'])->name('transfer-pin');
    Route::post('/app/bayar', [ServiceController::class, 'bayar'])->name('bayar');
    Route::get('/app/berhasil-bayar', [ServiceController::class, 'berhasilPage'])->name('berhasil-bayar');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/app/profile', [AuthController::class, 'profilePage'])->name('app.profile');
    Route::get('/app/profile/detail', [AuthController::class, 'detailProfilePage'])->name('app.profile.detail');
    Route::get('/app/profile/setting', [AuthController::class, 'settingPage'])->name('app.profile.setting');

    Route::get('/app/internet', [ServiceController::class, 'internetPage'])->name('internet');
});

Route::get('locale/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'id'])) {
        abort(400);
    }

    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('locale');