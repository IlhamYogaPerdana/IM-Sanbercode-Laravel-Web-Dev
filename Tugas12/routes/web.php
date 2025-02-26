<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

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

Route::get('/', [DashboardController::class, 'index']); // Route untuk Home
Route::get('/register', [FormController::class, 'showForm']); // Route untuk Register
Route::post('/welcome', [FormController::class, 'processForm']); // Route untuk menghandle form submit
//Route::get('/welcome', [FormController::class, 'welcome']); // Route untuk Welcome
