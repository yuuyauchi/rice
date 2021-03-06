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
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('customers','CustomerController');
    Route::resource('pastdata','PastDataController');
    Route::get('customer_register','CustomerController@create');
});
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('fullcalendar','CalendarController@index')->name('calendar.index');
Route::get('fullcalendar/create','CalendarController@create');
Route::post('fullcalendar/update','CalendarController@update');
Route::post('fullcalendar/delete','CalendarController@destroy');