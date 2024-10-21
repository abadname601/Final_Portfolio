<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogRequests;



Route::get('/lab1', function () {
    return view('lab1');
})->middleware([\App\Http\Middleware\LogRequests::class]);

Route::get('/lab2', function () {
    return view('lab2');
})->middleware([\App\Http\Middleware\LogRequests::class]);

Route::get('/lab3', function () {
    return view('lab3');
})->middleware([\App\Http\Middleware\LogRequests::class]);

Route::get('/lab4', function () {
    return view('lab4');
})->middleware([\App\Http\Middleware\LogRequests::class]);

Route::get('/', function () {
    return view('home');
})->middleware([\App\Http\Middleware\LogRequests::class]);


Route::get('/test', function () {
    return view('test');
})->middleware([\App\Http\Middleware\TestMiddleware::class]);


