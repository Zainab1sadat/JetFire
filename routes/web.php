<?php

use App\Http\Controllers\FireController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/index', [FireController::class, 'index'])->name('crud');
    Route::get('/add-contact', [FireController::class, 'create'])->name('create');
    Route::post('/add-contact', [FireController::class, 'store'])->name('store');
    Route::get('/edit-contact/{id}', [FireController::class, 'edit']);
    Route::put('/update-contact/{id}', [FireController::class, 'update']);
    Route::get('/delete-contact/{id}', [FireController::class, 'destroy']);
});
