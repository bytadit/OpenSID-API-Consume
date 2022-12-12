<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;


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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/populasi', function () {
    return view('populasi');
});
Route::get('/golongandarah', function () {
    return view('golonganDarah');
});
Route::get('/calonpemilih', function () {
    return view('calonPemilih');
});

// Route::prefix('bloodtypes')->group(function () {
//     Route::get('apiwithoutkey', [ProjectController::class, 'apiWithoutKey'])->name('apiWithoutKey');
//     Route::get('apiwithkey', [ProjectController::class, 'apiWithKey'])->name('apiWithKey');
//     Route::get('createpagination', [ProjectController::class, 'createPagination'])->name('createPagination');
// });


// Route::resource('projects', ProjectController::class);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']); // nyimpen data

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home.index', [
        'title' => 'Home'
    ]);
})->name('home');
Route::get('/bloodtypes', [BloodTypesController::class, 'index'])->name('bloodtypes');
Route::get('/populations', [PopulationsController::class, 'index'])->name('populations');
Route::get('/pemilih', [PemilihController::class, 'index'])->name('pemilih');
Route::get('/sex', [SexController::class, 'index'])->name('sex');
