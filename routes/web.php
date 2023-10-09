<?php

use App\Http\Controllers\DiagramController;
use App\Http\Controllers\ProfileController;
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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/diagrams/index', [DiagramController::class, 'index'] )->middleware(['auth', 'verified'])->name('diagram.index');
Route::get('/diagrams/create', [DiagramController::class, 'create'] )->middleware(['auth', 'verified'])->name('diagram.create');
Route::post('/diagrams/store', [DiagramController::class, 'store'] )->middleware(['auth', 'verified'])->name('diagram.store');
Route::get('/diagrams/show/{id}', [DiagramController::class, 'show'] )->middleware(['auth', 'verified'])->name('diagram.show');

Route::get('/graph', function () {
    return view('graph');
})->middleware(['auth', 'verified'])->name('graph');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
