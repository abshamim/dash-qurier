<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard.home');
});

Route::get('/shipments', function () {
    return view('dashboard.shipments');
});

Route::get('/add-shipments', function () {
    return view('dashboard.add-shipments');
});

Route::get('/payments', function () {
    return view('dashboard.payments');
});

Route::get('/add-payments', function () {
    return view('dashboard.add-payments');
});

Route::get('/employees', function () {
    return view('dashboard.employees');
});

Route::get('/add-employees', function () {
    return view('dashboard.add-employees');
});

Route::get('/vehicles', function () {
    return view('dashboard.vehicles');
});

Route::get('/add-vehicles', function () {
    return view('dashboard.add-vehicles');
});

Route::get('/dashboard-profile', function () {
    return view('dashboard.dashboard-profile');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard.dashboard-admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
