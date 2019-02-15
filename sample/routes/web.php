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

Route::get('/','HomeController@index');
Route::get('/index','HomeController@index');

Route::get('/about','HomeController@about');

Route::get('/portfolio','PortfolioController@portfolio');

Route::get('/photograph','PortfolioController@photograph');
Route::get('/video','PortfolioController@video');

Route::get('/contact','FormController@form')->name('contact');

Route::post('/contact/send','FormController@send');

// Route::get('/sample/mailable/preview', function () {
//   return new App\Mail\SampleNotification();
// });

// Route::get('/sample/mailable/send', 'SampleController@SampleNotification');