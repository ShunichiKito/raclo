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

//ユーザー用
Route::post('signup', 'Auth\RegisterController@user_register')->name('u_signup.post');
//スタイリスト用
Route::post('signup', 'Auth\RegisterController@stylist_register')->name('s_signup.post');


// Auth::routes();
Route::group(['prefix' => 'user'], function() { 
    // Authentication Routes...
            // $this->get('login', 'User\AuthController@showLoginForm');
    $this->post('login', 'User\AuthController@login')->name('u_login.post');
    $this->get('logout', 'User\AuthController@logout');

    // Registration Routes...
            // $this->get('register', 'User\AuthController@showRegistrationForm');
    $this->post('register', 'User\AuthController@register')->name('u_signup.post');

    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'User\PasswordController@showResetForm');
    $this->post('password/email', 'User\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'User\PasswordController@reset');
});


Route::group(['prefix' => 'stylist'], function() { 
    // Authentication Routes...
            // $this->get('login', 'Stylist\AuthController@showLoginForm');
    $this->post('login', 'Stylist\AuthController@login')->name('s_login.post');
    $this->get('logout', 'Stylist\AuthController@logout');

    // Registration Routes...
            // $this->get('register', 'Stylist\AuthController@showRegistrationForm');
    $this->post('register', 'Stylist\AuthController@register')->name('s_signup.post');

    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'Stylist\PasswordController@showResetForm');
    $this->post('password/email', 'Stylist\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Stylist\PasswordController@reset');
});




// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'WelcomeController@index');

// // ユーザ登録
// Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// // ログイン認証
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login')->name('login.post');
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



Route::get('/home', 'HomeController@index')->name('home');
