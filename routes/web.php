<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('home');
});

Route::get('/room', [RoomController::class, 'index']);
Route::get('/facility', [FacilityController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/administrator', function() {
    return view('administrator.index');
});
Route::get('/fasilitas-kamar', function() {
    return view('administrator.fasilitas-kamar');
});
Route::get('/fasilitas-umum', function() {
    return view('administrator.fasilitas-umum');
});
Route::get('/resepsionis', function() {
    return view('resepsionis.index');
});
Route::get('/resepsionis-fasilitas-kamar', function() {
    return view('resepsionis.fasilitas-kamar');
});
Route::get('/resepsionis-fasilitas-umum', function() {
    return view('resepsionis.fasilitas-umum');
});

