<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
//ruta del controlador servicios usado
//Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
Route::get('servicios/crear', 'App\Http\Controllers\Servicios2Controller@create')->name('servicios.create');
Route::post('servicios', 'App\Http\Controllers\Servicios2Controller@store')->name('servicios.store');
Route::get('servicios/{id}', 'App\Http\Controllers\Servicios2Controller@show')->name('servicios.show');
Route::view('contacto', 'contacto')->name('contacto');

