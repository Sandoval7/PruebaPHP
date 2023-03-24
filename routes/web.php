<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Models\Documents;

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

Route::get('/', [RegisterController::class, 'show']);


Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);


Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);


//Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', function () {
    $documents = Documents::all();

    return view('home.index', ['documents' => $documents]);
});

Route::post('/uploads', [App\Http\Controllers\HomeController::class, 'uploads'])->name('uploads');



Route::get('/logout', [LogoutController::class, 'logout']);