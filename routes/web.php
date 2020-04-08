<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'InfoController@index');
Route::resource('infos', 'InfoController');

