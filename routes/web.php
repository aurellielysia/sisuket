<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KtpController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('oauth/google', [\App\Http\Controllers\OauthController::class, 'redirectToProvider'])->name('oauth.google');  
Route::get('oauth/google/callback', [\App\Http\Controllers\OauthController::class, 'handleProviderCallback'])->name('oauth.google.callback');

//REGISTER
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerUser'])->name('register.submit');

//LOGIN
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');

//LOGOUT
Route::post('/logout', [AuthController::class, 'destroy'])
     ->middleware('auth')
     ->name('logout');

//LOGIN ADMIN
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

//LUPA PASSWORD
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

//RESET PASSWORD
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


//ADMIN
Route::get('/dashboard/admin/kecamatan', [KecamatanController::class, 'index'])->name('admin.kecamatan');
Route::delete('/dashboard/admin/kecamatan/{id}', [KecamatanController::class, 'destroy'])->name('admin.kecamatan.destroy');
Route::get('/dashboard/admin/kecamatan/create', [KecamatanController::class, 'create'])->name('admin.form-kecamatan');
Route::post('/dashboard/admin/kecamatan', [KecamatanController::class, 'store'])->name('admin.kecamatan.store');
Route::get('/dashboard/admin/kelurahan', [KelurahanController::class, 'index'])->name('admin.kelurahan');
Route::delete('/dashboard/admin/kelurahan/{id}', [KelurahanController::class, 'destroy'])->name('admin.kelurahan.destroy');
Route::get('/dashboard/admin/kelurahan/create', [KelurahanController::class, 'create'])->name('admin.form-kelurahan');
Route::post('/dashboard/admin/kelurahan', [KelurahanController::class, 'store'])->name('admin.kelurahan.store');
Route::get('/dashboard/admin/ktp', [KtpController::class, 'index'])->name('admin.ktp');
Route::get('/dashboard/admin/konfirmasi', [KtpController::class, 'konfirmasi'])->name('admin.konfirmasi-pengajuan');
Route::delete('/ktp/{id}', [KtpController::class, 'destroy'])->name('admin.ktp.destroy');
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.user');

//USER
Route::get('/user/form-ktp', [KtpController::class, 'create'])->name('user.form-ktp');
Route::post('/user/form-ktp', [KtpController::class, 'store'])->name('user.form-ktp.store');
Route::get('/user/pengajuan', [KtpController::class, 'pengajuan'])->name('user.pengajuan');
Route::get('/user/dashboard', [KtpController::class, 'dashboard'])->name('user.dashboard');
Route::get('/api/ktp/{id}', [KtpController::class, 'show'])->name('user.form-ktp.show');

//KONFIRM
Route::post('ktp/reject', [KtpController::class, 'reject'])->name('ktp.reject');
Route::post('/ktp/confirm/{id}', [KtpController::class, 'confirm'])->name('ktp.confirm');

// NOTIFIKASI
Route::get('/user/notifikasi', [NotificationController::class, 'index'])->name('user.notifikasi');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
