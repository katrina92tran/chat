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

Auth::routes();
//admin
Route::prefix('admin')->group(function (){
    Route::get('/','Admin\HomeController@index');
    Route::resource('news', 'Admin\NewsController');
});
/*Route::get('/','ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessages');*/
Route::get('/{any}', 'HomeController@index')->where('any', '.*');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
