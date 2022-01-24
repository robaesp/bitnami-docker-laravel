<?php

use App\Http\Controllers\PagesController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('dwes', function(){
    return '<h1>Clase Dwes</h1>';
});

Route::get('hola', function(){
    return view('helloWorld');
});

Route::get('pagina', function(){
    return view('ejemploWeb');
});

Route::view('inicio', 'inicio') -> name('inicio');
Route::view('nosotros', 'nosotros') -> name('nosotros');
Route::view('proyecto', 'proyecto') -> name('proyecto');

Route::get("proyecto/{id?}", function($id=1){
    return view("proyecto", ['id' => $id]);
    })->where("id", "[0-9]+")->name('proyecto');
    
//EJERCICIO 2
Route::get('/',[pagesController::class, 'inicio2'])->name('inicio2');


/* Route::get('inicio2', 'inicio2')->name('inicio2'); */
Route::get('nosotros2/{nombre?}', [PagesController::class, 'nosotros2'])->name('nosotros2');
Route::get('fotos/{id?}', [PagesController::class, 'fotos'])->where('id', '[0-9]+')->name('fotos');

Route::get('usuarios/{id?}', [PagesController::class, 'usuarios'])->name('usuarios');

//otra forma
/* Route::get('nosotros2/{nosotros2?}', [PagesController::class, 'nosotros2'])->name('nosotros2'); */
//Otra forma de hacerlo
/* Route::get('nosotros2/{nombre?}', [pagedController::class, 'nosotros2'])->name('equipo');
*/
Route::get('notas', [ PagesController::class, 'notas' ])->name("notas");

Route::get('notas/{id?}', [ PagesController::class, 'detalle' ])->name('notas.detalle');

//EXAMEN

Route::post('notas', [ PagesController::class, 'crear' ]) -> name('notas.crear');