<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\{
    Http\Controllers\DashboardController,
};
use App\{
    Http\Controllers\Auth\LoginController,
};
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\AssrCreateAccountController;

// Login and logout
Route::get('/', [LoginController::class, 'index'])->name('Login');
Route::post('/login', [LoginController::class, 'login'])->name('loginCheck');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->name('dashboard');

Route::get('/search', [DashboardController::class, 'search'])
    ->name('search');

Route::get('/pin', [DashboardController::class, 'pin'])
    ->name('pin');

Route::get('/transaction', [DashboardController::class, 'transaction'])
    ->name('transaction');

Route::get('/report', [DashboardController::class, 'report'])
    ->name('report');

Route::get('/field_sheet', [DashboardController::class, 'printFieldSheet'])
    ->name('fieldSheet');

Route::get('/tax_dec', [DashboardController::class, 'printTaxDec'])
    ->name('taxDec');

Route::get('/validation', [DashboardController::class, 'validation'])
    ->name('validation');

Route::get('/message', [DashboardController::class, 'message'])
    ->name('message');

Route::get('/account', [DashboardController::class, 'account'])
    ->name('account');

Route::resource('/barangay', controller: BarangayController::class);
Route::get('/user', [AssrCreateAccountController::class, 'index'])
    ->name('user');
Route::post('/user-create', [AssrCreateAccountController::class, 'store'])->name('user-create');


Route::get('/transactionSetup', [DashboardController::class, 'transactionSetup'])
    ->name('transactionSetup');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// // require __DIR__.'/auth.php';
