<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OmuncoliController@index')->name('home');
Route::get('/omuncolo/{id}', 'OmuncoliController@show')->name('show');
Route::get('/edit/{id}', 'OmuncoliController@edit')->name('edit');
Route::post('/update/{id}', 'OmuncoliController@update')->name('update');
Route::get('/destroy/{id}', 'OmuncoliController@destroy')->name('destroy');
Route::get('/create', 'OmuncoliController@create')->name('create');
Route::post('/store', 'OmuncoliController@store')->name('store');
