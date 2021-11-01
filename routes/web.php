<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;

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

Route::get('closure', function () {
    return 'this is by closure returned!';
});

Route::get('welcome', 'App\Http\Controllers\WelcomesController@index');

Route::get('home', 'App\Http\Controllers\PagesController@home');
Route::get('about', 'App\Http\Controllers\PagesController@about');
Route::get('contact', 'App\Http\Controllers\PagesController@contact');

Route::resource('tickets', App\Http\Controllers\TicketsController::class);

Route::get('mailto', function () {
    $data = [
        'name' => 'Learning Laravel Cookbook Incorporate, NACTAR, Bogura'
    ];

    Mail::send('mails.welcome', $data, function ($message) {
        $message->from('rezaul.nactar@gmail.com', 'MD. Rezaul Islam');

        $message->to('rezaul.cse.mbstu@gmail.com', 'MD. Rezaul Islam');

        $message->subject('Learning Laravel Cookbook: Hello Mail!');
    });

    return 'Your message has sent successfully!';

});

Route::resource('comments', App\Http\Controllers\CommentsController::class);