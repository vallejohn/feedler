<?php

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

Route::get('/', 'HomeController@index');
Route::resource('posts', 'PostController'); 

Auth::routes();

Route::prefix('manage')->group(function(){
    Route::get('dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::get('posts', 'ManageController@posts')->name('manage.posts');
});