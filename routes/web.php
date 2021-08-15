<?php

use Illuminate\Support\Facades\Route;


Route::get('/','SiteController@showHome');

Route::get('/about','SiteController@showAbout');

Route::get('/service','SiteController@showService');

Route::get('/portfolia','SiteController@showPortfolia');


Route::get('/homepage','HomeController@Home');
