<?php

/*
|--------------------------------------------------------------------------
| About package routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('about/manage', 'Regeneration\About\Controllers\AdminController');
Route::get('about/install', 'Regeneration\About\Controllers\AdminController@install');