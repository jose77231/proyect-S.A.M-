<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//rutas referenciadas:
route::view('/perfil','perfil')->name('perfil');
route::view('/configuracion','configuracion')->name('configuracion');
route::view('/inicio','inicio')->name('inicio');
route::view('/login','login')->name('login');
route::view('/index2','index2')->name('index2');
route::view('/index3','index3')->name('index3');
route::view('/index4','index4')->name('index4');
route::view('/index_admin','index_admin')->name('index_admin');
route::view('/index_invitado','index_invitado')->name('index_invitado');