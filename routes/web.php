<?php

use App\Http\Controllers\JalurController;
use App\Http\Controllers\BiodataController;
use illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ini adalah route tanpa MVC
Route::get('/jalurbaru', function(){
    return 'Ini Jalur Baru Tanpa MVC';
});

// ini adalah route menggunakan view
Route::get('/jalurview', function(){
    return view('viewjalur');
});


// ini adalah route menggunakan view & controller
Route::get('/jalurcontroller', [JalurController::class, 'index']);


// ini adalah route menggunakan view,  controller & model
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);


// ini adalah route menggunakan view,  controller & model
Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);