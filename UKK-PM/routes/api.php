<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// header('Access-Control-Allow-Origin: http://127.0.0.1:8000');
// header('Access-Control-Allow-Methods: *');
// header('Access-Control-Allow-Headers: *');
// header('Access-Control-Allow-Credentials: true');

Route::post('/kirimlogin', [App\Http\Controllers\AuthController::class, 'login'])->name('kirimlogin');
Route::post('/registerpost',[App\Http\Controllers\AuthController::class,'registerPost'])->name('register');
// Route::post('daftar', [App\Http\Controllers\AuthController::class, 'daftar'])->name('daftar');
Route::post('forgot-password', [App\Http\Controllers\AuthController::class, 'forgotPassword']);
Route::post('reset-password', [App\Http\Controllers\AuthController::class, 'reset']);
// Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::group(['prefix' => 'auth', 'middleware' => 'api'], function() {
    // manggil controller sesuai bawaan laravel 8

    // Route::get('/', [BookController::class, 'index']);
    // Route::get('/kabupaten/{id}', [App\Http\Controllers\MasyarakatController::class, 'logout'])->name('logout');
    
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::post('/logoutall', [App\Http\Controllers\AuthController::class, 'logoutall'])->name('logoutall');
    // manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi2 sebelumnya
    // Route::post('logoutall', 'AuthController@logoutall');
});
