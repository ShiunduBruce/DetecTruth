<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Crime;
use App\Http\Controllers\CrimeController;


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
     return view('welcome', [
        'murder'=>Crime::Where([['type','=', "murder"], ['status', '=', 'approved']])->count(),
        'robbery'=>Crime::Where([['type','=', "robbery"],['user_id', '=', 'approved']])->count(),
        'sexual_assault'=> Crime::Where([['type','=',"sexual assault"],['status', '=', 'approved']])->count(),
        'other'=> Crime::Where([['type','=', "other"],['status', '=', 'approved']])->count(),
     ]);
     
});

Route::get('/dashboard', function () {
     return view('dashboard', [
        'murder'=>Crime::Where([['type','=', "murder"], ['status', '=', 'approved']])->count(),
        'robbery'=>Crime::Where([['type','=', "robbery"],['user_id', '=', 'approved']])->count(),
        'sexual_assault'=> Crime::Where([['type','=',"sexual assault"],['status', '=', 'approved']])->count(),
        'other'=> Crime::Where([['type','=', "other"],['status', '=', 'approved']])->count(),
     ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [CrimeController::class, 'admin'])->name('crime.admin');
    Route::get('/report', [CrimeController::class, 'create'])->name('crime.create');
    Route::get('/edit/{crime}', [CrimeController::class, 'edit'])->name('crime.edit');
    Route::post('/edit/{crime}', [CrimeController::class, 'update'])->name('crime.update');
    Route::post('/reject/{crime}', [CrimeController::class, 'reject'])->name('crime.reject');
    Route::post('/approve/{crime}', [CrimeController::class, 'approve'])->name('crime.approve');
    Route::get('/delete/{crime}', [CrimeController::class, 'destroy'])->name('crime.delete');
    Route::post('/report', [CrimeController::class, 'store'])->name('crime.store');
    Route::get('/my-reports', [CrimeController::class, 'myReports'])->name('crime.myReports');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
