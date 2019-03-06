<?php

use Illuminate\Auth\Middleware\Authenticate;

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

Route::resource('trax', 'TransactionsController')->middleware('auth');

Auth::routes();

Route::get('/dash', 'DashboardController@dash')->name('dash')->middleware('auth');
Route::get('/all_transactions', 'DashboardController@all_transactions')->name('all_transactions');
Route::post('/more_details', 'DashboardController@more_details')->name('more_details')->middleware('auth');
Route::post('/all_tranx/more_details', 'DashboardController@all_more')->name('all_tranx/more_details');
Route::get('/transactions', 'DashboardController@transactions')->name('transactions')->middleware('auth');
Route::get('/profile', 'DashboardController@profile')->name('profile')->middleware('auth');
// Route::get('/about', 'DashboardController@about');
Route::get('/paynow', 'DashboardController@paynow')->name('paynow')->middleware('auth');
Route::get('/payment', 'DashboardController@payment')->name('payment')->middleware('auth');
Route::post('/payment', 'DashboardController@payment_post')->name('post_payment')->middleware('auth');
Route::post('/request', 'DashboardController@request');
Route::get('/admin', 'DashboardController@admin')->name('admin')->middleware('auth');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/privacy', 'PagesController@privacy')->name('privacy');
Route::get('/policy', 'PagesController@policy')->name('policy');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/subscribe', 'PagesController@subscribe')->name('subscribe');




