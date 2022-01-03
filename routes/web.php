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

Route::get('login/facebook', 'App\Http\Controllers\Auth\SocialitesController@redirectToFacebook');
Route::get('login/facebook/callback', 'App\Http\Controllers\Auth\SocialitesController@getFacebookCallback');

Route::get('login/twitter', 'App\Http\Controllers\Auth\SocialitesController@redirectToTwitter');
Route::get('login/twitter/callback', 'App\Http\Controllers\Auth\SocialitesController@getTwitterCallback');

Route::get('login/linkedin', 'App\Http\Controllers\Auth\SocialitesController@redirectToLinkedin');
Route::get('login/linkedin/callback', 'App\Http\Controllers\Auth\SocialitesController@getLinkedinCallback');

Route::get('login/google', 'App\Http\Controllers\Auth\SocialitesController@redirectToGoogle');
Route::get('login/google/callback', 'App\Http\Controllers\Auth\SocialitesController@getGoogleCallback');

Route::get('login/github', 'App\Http\Controllers\Auth\SocialitesController@redirectToGithub');
Route::get('login/github/callback', 'App\Http\Controllers\Auth\SocialitesController@getGithubCallback');

Route::get('login/gitlab', 'App\Http\Controllers\Auth\SocialitesController@redirectToGitlab');
Route::get('login/gitlab/callback', 'App\Http\Controllers\Auth\SocialitesController@getGitlabCallback');

Route::get('login/bitbucket', 'App\Http\Controllers\Auth\SocialitesController@redirectToBitbucket');
Route::get('login/bitbucket/callback', 'App\Http\Controllers\Auth\SocialitesController@getBitbucketCallback');

require __DIR__ . '/auth.php';