<?php

use Illuminate\Support\Facades\Route;
use Laravel\Horizon\Horizon;
use App\Http\Controllers\AuthController;

Horizon::routeMailNotificationsTo('your@email.com');


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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

