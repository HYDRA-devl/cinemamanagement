<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Http\Controllers\moviecontroller;
use App\Http\Controllers\projectioncontroller;


Route::get('/', [moviecontroller::class, 'fetshMovies'])->name('home');

Route::get('/movie', function () {
 
    return view('moviepage');
});
Route::get('/movie/{id}', [moviecontroller::class, 'fetshMovie'],  );

Route::get('/movie/{id}/reservation', function ($id,Request $request) {
    $date = $request->query('date');
    $hour = $request->query('hour');
    return view('reservationpage', ['id' => $id,'date' => $date, 'hour' => $hour]);
});


Route::get('/show-movie', [moviecontroller::class, 'fetshMovies']);

Route::get('/registration', [moviecontroller::class, 'register'])->name('registration');

Route::get('/signin', [moviecontroller::class, 'signin'])->name('signin');


