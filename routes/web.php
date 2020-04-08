<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'NewsController@index');
Route::resource('news', 'NewsController');

