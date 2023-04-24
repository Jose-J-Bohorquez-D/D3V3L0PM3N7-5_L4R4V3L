<?php

use Illuminate\Support\Facades\Route;

//metodo view('ruta','vistaDestino');
Route::view('/',"welcome")->name('home');
Route::view('nosotros',"nosotros")->name('nosotros');
Route::view('servicios',"servicios")->name('servicios');
Route::view('contacto',"contacto")->name('contacto');
Route::view('blog',"blog")->name('blog');
Route::view('registro',"registro")->name('registro');
Route::view('recuperarCuenta',"recuperarCuenta")->name('recuperarCuenta');
Route::view('perfil',"perfil")->name('perfil');
Route::view('ingreso',"ingreso")->name('ingreso');
Route::view('salir',"salir")->name('salir');

/* closure o funcion original se usan para hacer pruebas 
como pasar datos , variables o arrays
Route::get('/', function () {
    return view('welcome');
});
*/