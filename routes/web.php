<?php

use App\Http\Controllers\CatallogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/catalog', [CatallogController::class, 'getIndex']);

Route::get('/catalog/show/{id}', [CatallogController::class, 'getShow']);

Route::get('/catalog/create', [CatallogController::class, 'getCreate']);

Route::get('/catalog/edit/{id}', [CatallogController::class, 'getEdit']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
