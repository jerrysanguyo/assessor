<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\{
    Http\Controllers\DashboardController,
};

Route::get('/', function () {
    return view('welcome');
});

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// // require __DIR__.'/auth.php';
