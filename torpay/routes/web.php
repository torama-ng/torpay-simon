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

Route::get('/', 'PagesController@index');
// Route::get('/login', 'pagesController@login');
// Route::get('/register', 'pagesController@register');
// Route::get('/services', 'pagesController@services');

Route::resource('trax', 'TransactionsController');

Auth::routes();

Route::get('/dash', 'DashboardController@dash');
Route::get('/all_transactions', 'DashboardController@all_transactions');
Route::post('/more_details', 'DashboardController@more_details');
Route::post('//all_tranx/more_details', 'DashboardController@all_more');
Route::get('/transactions', 'DashboardController@transactions');
Route::get('/profile', 'DashboardController@profile');
// Route::get('/about', 'DashboardController@about');
Route::get('/paynow', 'DashboardController@paynow');
Route::get('/payment', 'DashboardController@payment');
Route::post('/payment', 'DashboardController@payment_post');
Route::post('/request', 'DashboardController@request');
Route::get('/services', 'pagesController@services');
Route::get('/about', 'PagesController@about');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/policy', 'PagesController@policy');
Route::get('/contact', 'PagesController@contact');
Route::post('/subscribe', 'PagesController@subscribe');




