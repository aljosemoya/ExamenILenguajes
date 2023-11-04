<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio',  [ directorioController:: class, 'showDirectorio'])->name('showDirectorio');
Route::get('/directorio/Agregar',  [ directorioController:: class, 'AgregarContacto'])->name('directorio.agregar');
Route::get('/directorio/Buscar',  [ directorioController:: class, 'BuscarContacto'])->name('directorio.buscar');
Route::get('/directorio/Eliminar',  [ directorioController:: class, 'EliminarContacto'])->name('directorio.eliminar');
Route::get('/directorio/VerContactos',  [ directorioController:: class, 'VerContacto'])->name('directorio.verContactos');
//vista de eliminar routas
Route::post('/directorio/Eliminar/All',  [ directorioController:: class, 'EliminarAll'])->name('directorio.eliminarAll');
//vista de crear nuevo directorio
Route::post('/directorio/NewContactoDirectorio',  [ directorioController:: class, 'NewDirectorio'])->name('directorio.new');
//Vista Buscar
Route::put('/directorio/buscarContacto',  [ directorioController:: class, 'BuscarContactoso'])->name('directorio.buscarContactos');