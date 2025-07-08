<?php

use App\Http\Controllers\Admin\GuestController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('fe.index');
// });

Route::get('/test', function () {
    return view('fe.test');
});
require __DIR__ . '/auth.php';


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('admin/master/guest', GuestController::class);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/simpan_pesan', [HomeController::class, 'simpan_pesan'])->name('home.simpan_pesan');
Route::post('/simpan_status', [HomeController::class, 'simpan_status'])->name('home.simpan_status');
Route::post('/a_a', [HomeController::class, 'a_a'])->name('home.a_a');
Route::post('/a_b', [HomeController::class, 'a_b'])->name('home.a_b');
Route::get('/{id?}', [HomeController::class, 'index'])->name('home.index');
