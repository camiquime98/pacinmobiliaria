<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\ImageController;
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




    

    Route::get('/imageinmueble', [App\Http\Controllers\ImageController::class, 'index'])->name('imageinmueble.index');
    
Route::post('dropzone/store', [ImageController::class, 'upload_image'])->name('dropzone.store');

    Route::get('/imageinmueble/fetch_image', [App\Http\Controllers\ImageController::class, 'fetch_image'])->name('imageinmueble.fetch_image');
    Route::get('/imageinmueble/delete_image', [App\Http\Controllers\ImageController::class, 'delete_image'])->name('imageinmueble.delete_image');




});


 


// Route::post('dropzone/upload_image', 'ImageController@upload_image')->name('dropzone.upload_image');


 


// Route::get('dropzone/fetch_image', 'ImageController@fetch_image')->name('dropzone.fetch_image');


 


// Route::get('dropzone/delete_image', 'ImageController@delete_image')->name('dropzone.delete_image');
