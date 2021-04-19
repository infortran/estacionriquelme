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

//Route::get('/admin_er2021', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/carta', 'HomeController@carta');
Route::post('/contacto', 'ContactController@send');

Route::get('/cuenta', 'HomeController@cuenta')->middleware('auth');
Route::get('/cuenta/donar', 'DonationController@donar')->middleware('auth');
Route::get('/configuracion', 'HomeController@configuracion')->middleware('auth');
Route::post('/payment/approved', 'DonationController@paymentApproved');
Route::post('/donations/result', 'DonationController@result');
Route::get('/donations/failed', 'DonationController@failed');
//Route::get('/mail', 'DonationController@mail');


Route::get('/admin', 'AdminController@index')->middleware('admin');


Route::resource('/admin/productos', 'ProductoController')->middleware('admin');
Route::resource('/admin/categorias', 'CategoriaController')->middleware('admin');