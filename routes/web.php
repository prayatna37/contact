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

Auth::routes();

Route::get('/add', 'ActionController@index')->name('add-form');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addcontact', 'ContactController@create')->name('contact.create');

Route::get('/contacts/{id}', 'ContactController@index')->name('contact.show');

Route::DELETE('/contact/delete/{id}','ContactController@destroy')->name('contact.destroy');

Route::get('/update/contact/{id}','ContactController@updateForm')->name('update.form');

Route::put('/update/contact/{id}','ContactController@update')->name('update.contact');

Route::get('/profile/{id}','ProfileController@profile')->name('show.profile');

