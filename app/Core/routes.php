<?php

use App\Core\Route;

Route::get('/', 'HomeController@index');
Route::get('/create', 'HomeController@create');