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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('welcome');
});
Route::get('/comofunciona', function () {
    return view('comofunciona');
});
Route::get('/profesionales', function () {
    return view('profesionales');
});
Route::get('/presupuesto', function () {
    return view('presupuesto');
});
Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/card', function () {
    return view('pago');
});
Route::get('/cards', function () {
    return view('tarjeta');
});
Route::get('/clientes', function () {
    return view('clientes');
});