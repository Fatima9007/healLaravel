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


Route::get('perfil', 'Page_Controller@perfil');

Route::get('new', 'Page_Controller@Nuevo');

Route::get('lista','Page_Controller@Lista');



Route::resource('Usuario', 'UsuarioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('usuario.create');
Route::resource('Usuario', 'UsuarioController');