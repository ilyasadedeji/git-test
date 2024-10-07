<?php

use Illuminate\Support\Facades\Route;

// Route for the 'portfolio' view
Route::get('/portfolio', function () {
    return view('portfolio');
});

// Route for the 'welcome' view (homepage)
Route::get('/', function () {
    return view('welcome');
});
