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

Route::get('envio-email', function(){

    //cria um objeto vazio
    $user = new stdClass();
    $user->name = 'Kevin Teste email';
    $user->email = 'kevin.fetter30@gmail.com';

    //return new \App\Mail\laravelTips($user);
    //Para que eu possa efetuar o disparo, deve ser posto:
    \Illuminate\Support\Facades\Mail::send(new \App\Mail\laravelTips($user));
});
