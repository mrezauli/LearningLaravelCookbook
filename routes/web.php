<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'App\Http\Controllers\PagesController@home');
Route::get('about', 'App\Http\Controllers\PagesController@about');
Route::get('contact', 'App\Http\Controllers\PagesController@contact');
Route::get('welcome', 'App\Http\Controllers\WelcomesController@index');

Route::resource('tickets', 'App\Http\Controllers\TicketsController');

//route get with laravel breeze
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//modified for our demand
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\BoardsController@index')->name('dashboard');
    Route::get('/boards/show', 'App\Http\Controllers\BoardsController@show');
});

require __DIR__ . '/auth.php';