<?php

use App\Models\BeritaModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;

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
}) ->name('halaman-depan');

Route::get('/profile', function () {
    return view('profile');
});

// login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/profile/{number}', [HomeController::class, 'profile']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/tambah', [BeritaController::class, 'tambah'])->name('tambah');
Route::post('/berita/tambah', [BeritaController::class, 'simpan'])->name('simpan');



// Tugas Week 1
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

