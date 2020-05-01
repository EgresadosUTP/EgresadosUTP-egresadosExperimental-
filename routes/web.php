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

Route::get('/', function () {
    return view('home.index');
});
Route::get('/contacto', function () {
    return view('home.contacto');
});

// Route::get('/admin', function () {
    
// });


// ############# Administrador   #################


// ------------- Perfil   -----------------
Route::get('/admin', 'AdminProfileController@index');
Route::get('/admin/profile', 'AdminProfileController@show');
Route::get('/admin/profile/edit', 'AdminProfileController@edit');
Route::put('/admin/profile/update', 'AdminProfileController@update');


// ------------- Publicaciones   -----------------
//Crear publicaciones
Route::get('/admin/publicaciones', 'AdminController@index');
Route::get('/admin/publicaciones/create', 'AdminController@create');
Route::post('/admin/publicaciones/store', 'AdminController@store');
//Actualizar publicaciones
Route::get('/admin/{post}/edit', 'AdminController@edit');
Route::put('/admin/{post}/update', 'AdminController@update');

// Mostrar un post específico
Route::get('/admin/{post}', 'AdminController@show')->name('admin.show'); // este amiguito es problematico
