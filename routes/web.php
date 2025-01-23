<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Assessor\Profile\ProfileController;
use App\Http\Controllers\Assessor\Search\SearchController;
use App\Http\Controllers\Assessor\Dashboard\DashboardController;
use App\Http\Controllers\Assessor\Validation\ValidationController;
use App\Http\Controllers\Assessor\Logs\AssrLogController;
use App\{
    Http\Controllers\Auth\LoginController,
};
use App\Http\Controllers\Assessor\Account\AccountController;
use App\Http\Controllers\Assessor\Account\RoleController;
use App\Http\Controllers\Assessor\Tracking\TrackingController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AssrCreateAccountController;
use App\Http\Controllers\AssrPurposeController;
use App\Http\Controllers\AssrTransactionController;
use App\Http\Controllers\AssrPinController;

use Barryvdh\DomPDF\Facade\Pdf;
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



Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::post('/dashboard/feedPost', [DashboardController::class, 'feedPost'])
    ->name('feedPost');

// Route::get('/generate-csrf-token', function () {
//     return response()->json(['csrf_token' => csrf_token()]);
// });

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');
// Route::post('/dashboard/store', [DashboardController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.store');


// System logs route
Route::get('/logs/system', [AssrLogController::class, 'indexSystemLogs'])->middleware(['auth', 'verified'])->name('logs.system');

// API route for fetching user logs (used by AJAX)
Route::get('/api/logs/user', [AssrLogController::class, 'fetchUserLogs'])->middleware(['auth', 'verified'])->name('api.logs.user');

Route::resource('/search', SearchController::class)->middleware(['auth', 'verified']);
Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('profile.index');
Route::put('/profile/update', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->middleware(['auth', 'verified'])->name('profile.changePassword');

// Validation routes
Route::get('/validation', [ValidationController::class, 'index'])->middleware(['auth', 'verified'])->name('validation.index');
Route::get('/validation/{id}', [ValidationController::class, 'show'])->middleware(['auth', 'verified'])->name('validation.show');
Route::delete('/validation/{id}', [ValidationController::class, 'destroy'])->middleware(['auth', 'verified'])->name('validation.destroy');

// Property Appraisal routes
Route::get('/property-appraisal/{id}', [ValidationController::class, 'editPropertyAppraisal'])
    ->middleware(['auth', 'verified'])
    ->name('property-appraisal.edit');

Route::post('/property-appraisal', [ValidationController::class, 'storePropertyAppraisal'])
    ->middleware(['auth', 'verified'])
    ->name('property-appraisal.store');

Route::put('/property-appraisal/{id}', [ValidationController::class, 'updatePropertyAppraisal'])
    ->middleware(['auth', 'verified'])
    ->name('property-appraisal.update');

Route::delete('/property-appraisal/{id}', [ValidationController::class, 'destroyPropertyAppraisal'])
    ->middleware(['auth', 'verified'])
    ->name('property-appraisal.destroy');

Route::get('/report', [ReportController::class, 'generatePDF'])->name('report.generate');

Route::get('/tracking', [TrackingController::class, 'index'])->middleware(['auth', 'verified'])->name('tracking.index');
Route::post('/tracking/store', [TrackingController::class, 'store'])->middleware(['auth', 'verified'])->name('tracking.store');
Route::get('/tracking-pdf-report', [TrackingController::class, 'pdfExport'])->middleware(['auth', 'verified']);


Route::prefix('account')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AccountController::class, 'index'])->name('account.index'); // View list of accounts
    Route::get('/create', [AccountController::class, 'create'])->name('account.create'); // Show create form
    Route::post('/', [AccountController::class, 'store'])->name('account.store'); // Store account
    Route::get('/{id}/edit', [AccountController::class, 'edit'])->name('account.edit'); // Show edit form
    Route::put('/{id}', [AccountController::class, 'update'])->name('account.update'); // Update account
    Route::delete('/{id}', [AccountController::class, 'destroy'])->name('account.destroy'); // Delete account
});

Route::prefix('role')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('role.index');
    Route::get('/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/', [RoleController::class, 'store'])->name('role.store');
    Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('/{id}', [RoleController::class, 'destroy'])->name('role.destroy');
});


require __DIR__ . '/auth.php';
