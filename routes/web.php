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

Route::get('/', 'AccountsController@index');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証(Auth::routes()を使うのでコメントアウト
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']],function(){
    // ユーザ一覧がindex、ユーザ詳細がshow
    Route::resource('users','UsersController',['only' => ['index','show']]);
    Route::resource('accounts','AccountsController');
});

// パスワードリセット（自動で追加）
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');