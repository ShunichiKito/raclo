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

//テスト用
Route::get('/s_closet', function () {
    return view('stylists/s_home');
})->name('s_closet');
//インフォのテスト用
Route::get('/s_menu', function () {
    return view('stylists/s_info');
})->name('s_menu');

//ユーザー用
Route::get('signup', 'Auth\RegisterController@showUserRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@user_register')->name('signup.post');
//スタイリスト用
Route::get('signup', 'Auth\RegisterController@showStylistRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@stylist_register')->name('signup.post');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// yuina test
Route::get('u_home', function () {
    return view('users/u_home');
})->name('u_home');





// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'WelcomeController@index');

// // ユーザ登録
// Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// // ログイン認証
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
// Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
