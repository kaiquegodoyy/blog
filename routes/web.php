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

Route::get('/', 'BlogController@index')->name('index.blog');


Route::get('/login', 'LoginController@Login')->name('login');
Route::post('/login/authenticate', 'LoginController@authenticate')->name('login.authenticate');

Route::get('/login/logout', 'LoginController@logout')->name('login.logout');

Route::prefix('admin')->middleware(['auth'])->group(function() {

    //Autenticação

    Route::prefix('users')->group(function(){

        Route::get('','UserController@list')->name('admin.users');
        Route::get('create','UserController@create')->name('admin.users.create');
        Route::get('edit/{userId}','UserController@edit')->name('admin.users.edit');
        Route::get('destroy/{userId}','UserController@destroy')->name('admin.users.destroy');
        Route::get('profile','UserController@profile')->name('admin.users.profile');
        Route::post('store','UserController@store')->name('admin.users.store');
        Route::post('update','UserController@update')->name('admin.users.update');
        
    
    });

   Route::prefix('posts')->group(function(){
        
        Route::get('', 'PostController@list')->name('admin.posts');
        Route::get('create', 'PostController@create')->name('admin.posts.create');
        Route::get('edit/{postId}', 'PostController@edit')->name('admin.posts.edit');
        Route::get('destroy/{postId}', 'PostController@destroy')->name('admin.posts.destroy');
        Route::post('store', 'PostController@store')->name('admin.posts.store');
        Route::post('update', 'PostController@update')->name('admin.posts.update');      

   }); 


});
