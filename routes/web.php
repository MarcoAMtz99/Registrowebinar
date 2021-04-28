<?php

use Illuminate\Support\Facades\Route;


Route::resource('/registro','RegistroController');
Route::get('/pago','RegistroController@create');
//Route::get('/','RegistroController@create');
