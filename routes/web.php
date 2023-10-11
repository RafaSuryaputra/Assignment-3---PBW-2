<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi');
Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.daftarKoleksi');
Route::delete('/koleksi/{collection}', [CollectionController::class, 'destroy'])->name('koleksi.destroy');
Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');

Route::get('/user', [ProfileController::class, 'index'])->name('user.daftarPengguna');
Route::get('/userView/{user}', [ProfileController::class, 'show'])->name('user.infoPengguna');
// Route::get('/userView/{user}', [ProfileController::class, 'show'])->name('user.infoPengguna');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// 6706223162 - Rafa Suryaputra