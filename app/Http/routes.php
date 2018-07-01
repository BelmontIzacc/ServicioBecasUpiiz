<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'welcomeController@index');

//-----------------------------------------------------------------------------------//
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
//-----------------------------------------------------------------------------------//
Route::get('/admin', 'adminController@index');
Route::post('/admin/Date', 'adminController@store');
Route::post('/admin/{variable}', 'adminController@chedkPasswordReset');
Route::get('/admin/config','adminController@configIndex');
Route::post('/admin/config/{variable}', 'adminController@checkPassword');
Route::get('/admin/config/insert/{variable}', 'adminController@getRegisterWindow');
Route::post('/admin/config/insert/{variable}', 'adminController@insertRegister');
Route::patch('/admin/config/insert/{variable}', 'adminController@updateRegister');
Route::delete('/admin/config/insert/{variable}', 'adminController@deleteRegister');
Route::get('/admin/eliminarAll','adminController@eliminarRegistros');
//-----------------------------------------------------------------------------------//
// Password reset link request routes...
Route::get('/password/email', 'Auth\PasswordController@getEmail');
Route::post('/password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('/password/reset', 'Auth\PasswordController@postReset');
//-----------------------------------------------------------------------------------//
Route::get('/admin/ExportExcelAll','ExcelController@All');
//-----------------------------------------------------------------------------------//
Route::get('/person/profile/{type}', 'shareController@profile');
Route::post('/person/profile/{type}', 'shareController@profilePassword');
Route::patch('/person/profile/{type}', 'shareController@editProfile');
//-----------------------------------------------------------------------------------//
Route::get('/forgetPass','forgetController@search');
//-----------------------------------------------------------------------------------//
Route::get('/logout','Auth\AuthController@getLogout');
Route::get('/blocked', 'welcomeController@stop');
Route::get('/Belmont', 'welcomeController@night');
//----------------Direcciona a la primera parte de registro--------------------------//
Route::get('/registro','Auth\AuthController@getRegister');
Route::post('/registro', 'Auth\AuthController@postRegister');

Route::get('/registro2','registroController@index');
Route::post('/registro2','registroController@store');
//Route::get('/registro2','registro2Controller@index');
//Route::post('/registro2','registroController@store2');
//-------------------Direcciona a la parte de créditos-------------------------------//
Route::get('/creditos','creditsController@index');

Route::get('/muestra','muestraController@index');
Route::get('/editar','muestraController@editar');
Route::post('/muestra','muestraController@update');
Route::get('/descargarPDF','PDFController@getPDF');
//Route::get('/muestraPDF','PDFController@getPDF');
Route::get('/muestraPDF','PDFController@index');