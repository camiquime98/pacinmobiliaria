<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UseradminController;
use App\Http\Controllers\SegurosController;
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


Route::post('dropzone/store', [ImageController::class, 'upload_image'])->name('dropzone.store');
Route::get('/', [App\Http\Controllers\inicioController::class, 'index'])->name('inicio');
Route::get('/contactanos', [App\Http\Controllers\inicioController::class, 'contactoindex'])->name('contactanos.contactanos');

Route::get('seguros', [App\Http\Controllers\SegurosController::class, 'index'])->name('seguros');
Route::get('asesoresj', [App\Http\Controllers\AsesoresjController::class, 'index'])->name('asesoresj');
// Route::get('/contactanos', [App\Http\Controllers\inicioController::class, 'contactoindex'])->name('contactanos.contactanos');
// Route::get('/contactanos', [App\Http\Controllers\inicioController::class, 'contactoindex'])->name('contactanos.contactanos');

Route::get('/imageinmueble/fetch_image_show', [App\Http\Controllers\ImageController::class, 'fetch_image_show'])->name('imageinmueble.fetch_image_show');

Route::get('/imageinmueble/fetch_image_modal', [App\Http\Controllers\ImageController::class, 'fetch_image_modal'])->name('imageinmueble.fetch_image_modal');


Route::get('buscar_inmueble', [App\Http\Controllers\inmueblesController::class, 'buscar_inmueble'])->name('buscar_inmueble');

Route::get('buscarinmueble', [App\Http\Controllers\inicioController::class, 'buscarinmueble'])->name('buscarinmueble');




Route::get('/inicioshow{id}', [App\Http\Controllers\inicioController::class, 'indexshow'])->name('inicioshow');


// Route::get('/', function () {
//     return view('inicio');
// });

Route::group(['middleware' => ['auth', 'MDadmin']], function()
{
//________________________________________________________________________________________________
    //VISTA HOME DEL ADMIN////////////////////////////////////////////////////////////////////}
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //FIN VISTA HOME////////////////////////////////////////////////////////////////////
//________________________________________________________________________________________________

//________________________________________________________________________________________________
    // CRUD DEL ADMINISTRADOR ///////////////////////////////////////////////////////////////
    Route::get('/user', [App\Http\Controllers\UseradminController::class, 'index'])->name('user.index');

    Route::get('/user/{id}/edit', [App\Http\Controllers\UseradminController::class, 'edit'])->name('user.edit');
    // FIN CRUD ADMINISTRADOR ///////////////////////////////////////////////////////////////
//________________________________________________________________________________________________


//________________________________________________________________________________________________
    // CRUD DEL INMUEBLE ///////////////////////////////////////////////////////////////////
    Route::get('/inmueble', [App\Http\Controllers\inmueblesController::class, 'index'])->name('inmueble.index');

    Route::get('/inmueble/create', [App\Http\Controllers\inmueblesController::class, 'create'])->name('inmueble.create');

    
    Route::get('/inmueble/{id}/image', [App\Http\Controllers\inmueblesController::class, 'image'])->name('image.edit');
  
    Route::get('/inmueble/{id}/edit', [App\Http\Controllers\inmueblesController::class, 'edit'])->name('inmueble.edit');

    Route::put('/inmueble/{id}', [App\Http\Controllers\inmueblesController::class, 'update'])->name('inmueble.update');

    Route::delete('/inmueble/{id}', [App\Http\Controllers\inmueblesController::class, 'destroy'])->name('inmueble.destroy');

    Route::get('/inmueble/{id}', [App\Http\Controllers\inmueblesController::class, 'show'])->name('inmueble.show');
                
    Route::post('/inmueble', [App\Http\Controllers\inmueblesController::class, 'store'])->name('inmueble.store');
    // FIN CRUD DEL INMUEBLE ///////////////////////////////////////////////////////////////////
//________________________________________________________________________________________________

    

//________________________________________________________________________________________________
    // IMAGENES DEL INMUEBLE ///////////////////////////////////////////////////////////////////
    Route::get('/imageinmueble', [App\Http\Controllers\ImageController::class, 'index'])->name('imageinmueble.index');
    Route::get('/imageinmueble/upload_image', [App\Http\Controllers\ImageController::class, 'upload_image'])->name('imageinmueble.upload_image');
    Route::get('/imageinmueble/fetch_image', [App\Http\Controllers\ImageController::class, 'fetch_image'])->name('imageinmueble.fetch_image');
    Route::get('/imageinmueble/delete_image', [App\Http\Controllers\ImageController::class, 'delete_image'])->name('imageinmueble.delete_image');



    Route::get('/imageinmueble/set_image', [App\Http\Controllers\ImageController::class, 'set_image'])->name('imageinmueble.set_image');
    Route::get('/imageinmueble/set_image2', [App\Http\Controllers\ImageController::class, 'set_image2'])->name('imageinmueble.set_image2');

    // FIN CRUD DEL INMUEBLE ///////////////////////////////////////////////////////////////////
//________________________________________________________________________________________________
 

});


 


// Route::post('dropzone/upload_image', 'ImageController@upload_image')->name('dropzone.upload_image');


 


// Route::get('dropzone/fetch_image', 'ImageController@fetch_image')->name('dropzone.fetch_image');


 


// Route::get('dropzone/delete_image', 'ImageController@delete_image')->name('dropzone.delete_image');