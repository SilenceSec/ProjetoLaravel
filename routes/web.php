<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('prmd');
});

Route::get('/list', function () {
    return view('list');
});

