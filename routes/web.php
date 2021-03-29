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

Route::get('/admin_er2021', 'HomeController@index');
Route::get('/', 'HomeController@mantencion');
Route::get('/admin', 'AdminController@index')->middleware('auth');
//Route::get('/login2', 'IndexController@login2');

Route::post('/contacto', 'ContactController@send');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/productos', 'ProductoController')->middleware('auth');
