<?php

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

Route::get('/', 'Page_Controller@inicio');

Route::get('hola', function () {
    return view('hola');
});

Route::get('plantilla', function () {
    return view('layouts/plantilla');
});

Route::get('perfil', function () {
    return view('perfil');
});
Route::get('new', function () {
    return view('Nuevo_Paciente');
});

Route::get('lista', function () {
    return view('Lista_Paciente');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('perfil');
