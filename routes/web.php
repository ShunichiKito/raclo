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


Route::get('/', function () {
    return view('auth/user_register_or_login');
})->name('u_signup_or_login');

Route::get('/s_signup_or_login', function () {
    return view('auth/stylist_register_or_login');
})->name('s_signup_or_login');

Route::get('/u_home', function () {
    return view('users/u_home');
})->name('u_home');


// // ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// // ログイン認証
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


// Route::group(['middleware' => ['auth']], function () {
//     Route::resource('items', 'ItemsController', ['only' => ['create', 'show']]);
//     Route::post('want', 'ItemUserController@want')->name('item_user.want');
//     Route::delete('want', 'ItemUserController@dont_want')->name('item_user.dont_want');
//     Route::post('have', 'ItemUserController@have')->name('item_user.have');
//     Route::delete('have', 'ItemUserController@dont_have')->name('item_user.dont_have');
//     Route::resource('users', 'UsersController', ['only' => ['show']]);
// });

// // ランキング
// Route::get('ranking/want', 'RankingController@want')->name('ranking.want');

// Route::get('ranking/have', 'RankingController@have')->name('ranking.have');


Route::get('/home', 'HomeController@index')->name('home');



//Auth::routes();　これは下記のルートと同じ
// Authentication Routes...
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');