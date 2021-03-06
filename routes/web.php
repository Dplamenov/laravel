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
use Illuminate\Support\Facades\Route;

Route::get('/', 'pageController@index');
Route::get('page/{id}', 'pageController@show');
Route::post('admin/login', 'adminController@login');
Route::get('logout', 'adminController@logout');
Route::get('admin', 'adminController@index');
Route::get('admin/page', 'adminController@viewPage')->name('admin_page');
Route::get('admin/page/delete/{id}', 'adminController@deletePage');
Route::get('admin/page/create', 'adminController@createPage');
Route::post('admin/page/create', 'adminController@storePage');
Route::post('admin/page/default', 'adminController@setDefaultPage');
Route::get('admin/page/еdit/{id}', 'adminController@editPage');
Route::post('admin/page/еdit/{id}', 'adminController@storeEditPage');
Route::post('admin/changetheme', 'adminController@changetheme');
Route::get('admin/account', 'adminController@account');
Route::post('admin/account', 'adminController@accountSave');