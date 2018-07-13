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


//初期画面

Route::get('/', function () {
    return view('auth/user_register_or_login');
})->name('u_signup_or_login');

Route::get('/s_signup_or_login', function () {
    return view('auth/stylist_register_or_login');
})->name('s_signup_or_login');



// // ユーザ登録, ログイン処理
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//ログイン後画面
Route::group(['middleware' => ['auth']], function () {
    Route::get('/users/u_home', function () {
        return view('users/u_home');
    });
    Route::get('/stylists/s_home', function () {
        return view('stylists/s_home');
    });
    
    Route::resource('users', 'UsersController', ['only' => ['index', 'show','edit','update']]);
    Route::resource('tasks', 'TasksController', ['only' => ['store', 'destroy', 'edit', 'update', 'create', 'show']]);
    


    Route::post('/myitems/selected', 'UsersController@myregister')->name('myitems.selected');
    Route::post('/newitems/selected', 'UsersController@newregister')->name('newitems.selected');
    
    Route::get('/u_edit', function () {
        return view('users/u_edit');
    })->name('u_edit');
    Route::get('/s_edit', function () {
        return view('stylists/s_edit');
    })->name('s_edit');
    // Route::get('/u_edit', function () {
    //     return view('users/u_edit');
    // })->name('u_edit');
    // Route::get('/s_edit', function () {
    //     return view('stylists/s_edit');
    // })->name('s_edit');
    Route::get('u_stylist_lists', 'UsersController@s_index')->name('s_index');
    Route::get('u_onlinestylist_lists', 'UsersController@s_online_index')->name('s_online_index');
    
    
    Route::post('u_order', 'UsersController@u_order')->name('u_order');
    
    Route::get('/u_privacy', function () {
        return view('users/u_privacy');
    })->name('u_privacy');
    Route::get('/s_privacy', function () {
        return view('stylists/s_privacy');
    })->name('s_privacy');
    Route::get('/u_price', function () {
        return view('users/u_price');
    })->name('u_price');
    Route::get('/s_price', function () {
        return view('stylists/s_price');
    })->name('s_price');
    
    Route::get('/s_icon', function () {
        return view('items/s_icon');
    })->name('s_icon');
    
    Route::get('/s_online_icon', function () {
        return view('items/s_online_icon');
    })->name('s_online_icon');
    
});


//参考として
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
