<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [AdminController::class, 'index'])->name('archives.index')->middleware('auth');

// Route de laravel
Route::get('/laravel', [AdminController::class, 'archivesLaravel'])->name('archives.laravel')->middleware('auth');
Route::get('/laravel/{slug}-{laravel}', [AdminController::class, 'archivesDetailLaravel'])->name('archives.laravel.detail')->where([
    'slug' => $slug,
    'laravel' => $id
])->middleware('auth');

// Route de laravel
Route::get('/livewire', [AdminController::class, 'archivesLivewires'])->name('archives.livewire')->middleware('auth');
Route::get('/livewire/{slug}-{livewire}', [AdminController::class, 'archivesDetailLivewire'])->name('archives.livewire.detail')->where([
    'slug' => $slug,
    'livewire' => $id
])->middleware('auth');

// Route de Javascript
Route::get('/javascript', [AdminController::class, 'archivesJavascript'])->name('archives.javascript')->middleware('auth');
Route::get('/javascript/{slug}-{javascript}', [AdminController::class, 'archivesDetailJavascript'])->name('archives.javascript.detail')->where([
    'slug' => $slug,
    'javascript' => $id
])->middleware('auth');

// Route de HTML
Route::get('/html', [AdminController::class, 'archivesHtml'])->name('archives.html')->middleware('auth');
Route::get('/html/{slug}-{html}', [AdminController::class, 'archivesDetailHtml'])->name('archives.html.detail')->where([
    'slug' => $slug,
    'html' => $id
])->middleware('auth');

// Route de Css
Route::get('/css', [AdminController::class, 'archivesCss'])->name('archives.css')->middleware('auth');
Route::get('/css/{slug}-{css}', [AdminController::class, 'archivesDetailCss'])->name('archives.css.detail')->where([
    'slug' => $slug,
    'css' => $id
])->middleware('auth');

//Route pour l'authentification
Route::get('/connexion', [LoginController::class, 'connexion'])->name('auth.connexion');
Route::post('/connexion', [LoginController::class, 'sauvegarde']);
Route::delete('/deconnecter', [LoginController::class, 'deconnection'])->name('auth.deconnection');





