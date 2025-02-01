<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('reservation', function () {
    return view('reservation');
});

Route::get('site', function () {
    return view('site');
});

Route::get('galerie', function () {
    return view('galerie');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

Route::get('index', function () {
    return view('index');
});
Route::get('ReservationsController', [ReservationsController::class, 'reservation1']);
Route::post('ReservationsController', [ReservationsController::class, 'store']);