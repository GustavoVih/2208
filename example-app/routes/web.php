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

Route::get('/', function(){
    return view('welcome');
});

/*
Route::get('/aula01', function(){
    return view('');
});

Route::get('/aula02', function(){
    return view('');
});
*/

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/aula03', function(){
    return view('index3.blade\index3');
});

Route::get('/aula04', function(){
    return view('index4');
});

Route::get('/aula05', function(){
    return view('index5');
});

Route::get('/aula06', function(){
    return view('index6');
});

Route::get('/aula07', function(){
    return view('index7');
});

/*
Route::get('/aula08', function(){
    return view('');
});

Route::get('/aula09', function(){
    return view('');
});
*/

Route::get('/final', function(){
    return view('Produto1');
});

Route::get('/aula9.5', function(){
    return view('index');
});

Route::get('/projeto', function(){
    return view('projeto');
});

Route::get('/newProject', function(){
    return view('newProject');
});