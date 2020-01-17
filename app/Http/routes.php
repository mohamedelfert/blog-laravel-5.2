<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages' , 'pageController@show');
Route::get('pages/{page}' , 'pageController@page_note');
Route::post('page_create' , 'pageController@create');
Route::get('pages/{page}/edit' , 'pageController@edit');
Route::post('pages/{page}/update' , 'pageController@update');
Route::get('pages/{page}/delete' , 'pageController@delete');

Route::post('pages/{page}/note_create' , 'noteController@create');
Route::get('notes/{note}/edit' , 'noteController@edit');
Route::post('notes/{note}/update' , 'noteController@update');
Route::get('notes/{note}/delete' , 'noteController@delete');