<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Cagnoli_Controller@index')->name('home');
Route::get('/cagnolo/{id}', 'Cagnoli_Controller@show')->name('gooddoggo');
