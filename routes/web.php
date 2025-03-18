<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'download']);
Route::get('/you', [HomeController::class, 'ask']);

// Make /hey the default route
Route::fallback(function() {
    return redirect('/home');
});