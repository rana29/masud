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

/*

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/


Route::get('/registerform2','datacontroller@registerform2')->name('registerform2');

Route::post('/register2','datacontroller@register2')->name('register2');


//------------------------------------------- route of register------------------------

Route::get('/registerform','datacontroller@registerform')->name('registerform');

Route::post('/register','datacontroller@register')->name('register');


//------------------------------------------rout for show data----------------------------

Route::get('/show','datacontroller@show')->name('show');
Route::get('/view/{id}','datacontroller@view')->name('view');


//--------------------------delete-----------------------------------


Route::get('/delete/{id}','datacontroller@delete')->name('delete');


//------------------------update---------------------------------


Route::get('/edit/{id}','datacontroller@edit')->name('edit');

Route::post('/update/{id}','datacontroller@update')->name('update');


//---------------------------auto---------------------------------//

Route::get('/auto','datacontroller@auto')->name('auto');



