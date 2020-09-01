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

Route::get('/', 'HomeController@index');

Route::get('/login', 'HomeController@login');

Route::get('/register', 'HomeController@register');

Route::get('/admin', 'HomeController@admin');

Route::get('/qna', 'HomeController@qna');

Route::get('/mypage', 'HomeController@mypage');

Route::get('/notice', 'HomeController@notice');

Route::get('/review_item', 'HomeController@review_item');

Route::get('/review_site', 'HomeController@review_site');

Route::post('/user_id_dupe_check', 'UserController@user_id_dupe_check');
