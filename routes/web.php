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

Route::middleware('auth')->group(function(){
        Route::post('/tweets', 'TweetsController@store');
        Route::get('/tweets',
            'TweetsController@index')
            ->name('home');

        Route::get('/profiles/{user:username}/follows',
            'FollowsController@store');

        Route::get(
            '/profiles/{user:username}/edit',
            'ProfilesController@edit'
        )->middleware('can:edit,user');


});
Route::get('/profiles/{user:username}',
    'ProfilesController@show')
    ->name('profiles');

Auth::routes();



