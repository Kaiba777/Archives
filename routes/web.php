<?php

use App\Http\Controllers\admin\AdminController;
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
$slug = '[0-9a-z\-]+';
$id = '[0-9]+';

Route::get('/', [AdminController::class, 'index'])->name('archives.index');

// Route de laravel
Route::get('/laravel', [AdminController::class, 'archivesLaravel'])->name('archives.laravel');
Route::get('/laravel/{slug}-{laravel}', [AdminController::class, 'archivesDetailLaravel'])->name('archives.laravel.detail')->where([
    'slug' => $slug,
    'laravel' => $id
]);

// Route de laravel
Route::get('/livewire', [AdminController::class, 'archivesLivewires'])->name('archives.livewire');
Route::get('/livewire/{slug}-{livewire}', [AdminController::class, 'archivesDetailLivewire'])->name('archives.livewire.detail')->where([
    'slug' => $slug,
    'livewire' => $id
]);

// Route de Javascript
Route::get('/javascript', [AdminController::class, 'archivesJavascript'])->name('archives.javascript');





