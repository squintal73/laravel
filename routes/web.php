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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('loja','loja/clientes',301);

Route::prefix('loja/clientes')->group(function (){

    Route::get('/', function () {
        return '<h1> Lista de Clientes </h1>';
    })->name('c.list');

    Route::get('/create', function (){
        return view('form_clientes');
    });
});

Route::any('save', function () {
    return 'Cliente criado com sucesso!!!';
})->name('c.save');
