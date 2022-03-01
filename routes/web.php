<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Models\inmuebles;
use App\Http\livewire\Userstable;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\inicioController::class, 'index'])->name('inicio');

Route::get('/inicioshow{id}', [App\Http\Controllers\inicioController::class, 'indexshow'])->name('inicioshow');
// Route::get('/', function () {
//     return view('inicio');
// });

Route::group(['middleware' => ['auth', 'MDadmin']], function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/inmuebles', [inmueblesController::class, 'index']);

    Route::get('inmuebles', [App\Http\Controllers\inmueblesController::class, 'index'])->name('inmuebles.index');

    Route::get('inmuebles/create', [App\Http\Controllers\inmueblesController::class, 'create'])->name('inmuebles.create');

    Route::get('/inmuebles/{id}/edit', [App\Http\Controllers\inmueblesController::class, 'edit'])->name('inmuebles.edit');

    Route::put('/inmuebles/{id}', [App\Http\Controllers\inmueblesController::class, 'update'])->name('inmuebles.update');

    Route::delete('/inmuebles/{id}', [App\Http\Controllers\inmueblesController::class, 'destroy'])->name('inmuebles.destroy');

    Route::get('/inmuebles/{id}', [App\Http\Controllers\inmueblesController::class, 'show'])->name('inmuebles.show');
                
    Route::post('/inmuebles', [App\Http\Controllers\inmueblesController::class, 'store'])->name('inmuebles.store');

});