<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php
Route::get('/seleccionarplan',[App\Http\Controllers\PlanController::class, 'seleccionarPlan'])->name('seleccionarplan');

// routes/web.php
Route::post('/pago',[App\Http\Controllers\PlanController::class, 'realizarPago'])->name('realizar-pago');
// routes/web.php
Route::get('/compra-exitosa', function () {
    return view('compra_exitosa');
})->name('compra-exitosa');
