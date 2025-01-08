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
use App\Http\Controllers\AssrPurposeController;
use App\Http\Controllers\AssrTransactionController;
use App\Http\Controllers\AssrPinController;

// Login and logout
Route::get('/', [LoginController::class, 'index'])->name('Login');
Route::post('/login', [LoginController::class, 'login'])->name('loginCheck');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::post('/dashboard/feedPost', [DashboardController::class, 'feedPost'])
    ->name('feedPost');

Route::resource('/pin', AssrPinController::class);
    
Route::get('/search', [DashboardController::class, 'search'])
    ->name('search');

// Route::get('/pin', [DashboardController::class, 'pin'])
//     ->name('pin');

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
Route::get('/user-show/{id}', [AssrCreateAccountController::class, 'show'])->name('user-show');
Route::post('/user-create', [AssrCreateAccountController::class, 'store'])->name('user-create');
Route::put('/user-update/{id}', [AssrCreateAccountController::class, 'update'])->name('user-update');


Route::get('/transaction-setup',[AssrTransactionController::class,'index']);
Route::post('/transaction-create',[AssrTransactionController::class,'store'])->name('transaction-create');
Route::delete('/transaction-delete/{id}',[AssrTransactionController::class,'destroy'])->name('transaction-delete');

Route::get('/purpose-setup',[AssrPurposeController::class,'index']);
Route::post('/purpose-create',[AssrPurposeController::class,'store'])->name('purpose-create');
Route::delete('/purpose-delete/{id}',[AssrPurposeController::class,'destroy'])->name('purpose-delete');


Route::get('/transactionSetup', [DashboardController::class, 'transactionSetup'])
    ->name('transactionSetup');

Route::get('/generate-csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// // require __DIR__.'/auth.php';
