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

Route::resource('tickets', \App\Http\Controllers\TicketsController::class);
Route::resource('comments', \App\Http\Controllers\CommentsController::class);
Route::resource('blogs', \App\Http\Controllers\BlogsController::class);

//route from laravel breeze
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//modified for our demand
//works for anyone
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'App\Http\Controllers\BoardsController@index')->name('dashboard');
});

//works only for user
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('boards/show', 'App\Http\Controllers\BoardsController@show')->name('boards.show');
});


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'auth'], function () {
    Route::resource('users', UsersController::class);
    Route::resource('posts', PostsController::class);
    Route::resource('categories', CategoriesController::class);
});

Route::group(['prefix' => 'manager', 'middleware' => ['manager', 'auth']], function () {
    Route::resource('managers', App\Http\Controllers\Manager\ManagersController::class);
    Route::resource('pages', App\Http\Controllers\Manager\PagesController::class);
});

Route::get('login/facebook', 'Auth\SocialitesController@redirectToFacebook');
Route::get('login/facebook/callback', 'Auth\SocialitesController@getFacebookCallback');

require __DIR__ . '/auth.php';