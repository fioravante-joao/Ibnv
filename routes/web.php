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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/devocional', function () {
    return view('devocional');
})->name('devocional');

Route::get('/comochegaraoceu', function () {
    return view('comochegaraoceu');
})->name('comochegaraoceu');

Route::get('/mensagensbiblicas', function () {
    return view('mensagensbiblicas');
})->name('mensagensbiblicas');

Route::get('/fotos', function () {
    return view('fotos');
})->name('fotos');

Route::get('/papeisdeparede', function () {
    return view('papeisdeparede');
})->name('papeisdeparede');

Route::get('/assistapregacoes', function () {
    return view('assistapregacoes');
})->name('assistapregacoes');

Route::get('/bibliaparaouvir', function () {
    return view('bibliaparaouvir');
})->name('bibliaparaouvir');

Route::get('/doe', function () {
    return view('doe');
})->name('doe');

Route::get('/missionarios', function (){
    return view('missionarios');
})->name('missionarios');

Route::get('/pedidosDeOracao', function (){
    return view('pedidosDeOracao');
})->name('pedidosDeOracao');


//route adm do sistema
Route::get('/usuarioadmin', function () {
    return view('usuarioadmin');
})->name('usuarioadmin');


