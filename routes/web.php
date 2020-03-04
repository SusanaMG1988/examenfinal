<?php

use App\Article;
use App\Http\Controllers\ArticlesController;

Route::get('/', function (){
    return view('inicio');
})->name('inicio');


Route::get('/saludo/{name}/{nickname?}','WelcomeController');
Route::get('/pasteles', 'PastelController@index');
Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9 ]+');

Route::get('/home', 'HomeController@index')->name('home');
