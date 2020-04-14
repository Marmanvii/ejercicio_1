<?php

use Illuminate\Support\Facades\Route;

/* Documentacion en:
   https://laravel.com/docs/7.x/routing */

/* Indica la direccion base del proyecto (ej: www.pagina.com/ === www.pagina.com) 
   En este caso, la peticion es del tipo GET y se llama al index presente en nuestro InfoController */
Route::get('/', 'InfoController@index');

/* Aqui se hace uso de resource, el cual genera todas las rutas existentes en un CRUD,
   en este caso, para nuestro controlador InfoController (Ver tabla en documentacion)
   o ver con -> php artisan r:l */
Route::resource('infos', 'InfoController');

