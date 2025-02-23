<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', 'FrontendController');
Route::get('/product', 'FrontendController@product');
Route::get('/admin', function ()
{
    return redirect('/admin/dashboard');
});
Route::resource('/admin/dashboard','BerandaController');
Route::resource('/admin/buku','BukuController');
Route::resource('/admin/jenis','JenisController');
Route::resource('/admin/genre','GenreController');
Route::resource('/admin/text-bahasa','TextBahasaController');
Route::resource('/admin/jenis-cover','JenisCoverController');
Route::resource('/admin/penulis','PenulisController');
Route::resource('/admin/penerbit','PenerbitController');