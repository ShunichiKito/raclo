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


// // ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// // ログイン認証
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');




//ログイン後画面
Route::group(['middleware' => ['auth']], function () {
    //ログイン後ホーム
    Route::get('/users/u_home', function () {
        return view('users/u_home');
    });
    // Route::get('/stylists/s_home', function () {
    //     return view('stylists/s_home');
    // });
    Route::get('/stylists/s_home','ItemsController@s_request_receive');

    Route::resource('users', 'UsersController', ['only' => ['index', 'show','edit','update']]);
    Route::resource('tasks', 'TasksController', ['only' => ['store', 'destroy', 'edit', 'update', 'create', 'show']]);
    
   //ユーザー　コーディネート済みセット一覧
    Route::get('/u_index', 'UsersController@u_cooindex')->name('u_index');
    //ユーザー　コーディネート済み詳細
     Route::get('/u_coord_show/{orderid}', 'UsersController@u_cooshow')->name('u_coord_show');
   
    //ユーザー、スタイリストプロフィール編集
    Route::get('/u_edit', function () {
        return view('users/u_edit');
    })->name('u_edit');
    Route::get('/s_edit', function () {
        return view('stylists/s_edit');
    })->name('s_edit');
    
    //スタイリスト一覧
    Route::get('u_stylist_lists', 'UsersController@s_index')->name('s_index');
    Route::get('u_onlinestylist_lists', 'UsersController@s_online_index')->name('s_online_index');
    
    //服選択処理→スタイリスト選択へ
    // Route::post('u_order', 'UsersController@u_order')->name('u_order');
    
   
     //ユーザーによる服選択→オーダー確認へ
    // Route::post('/myitems/selected', 'UsersController@myregister')->name('myitems.selected');
    Route::post('/items/selected', 'UsersController@item_register')->name('items.selected');
   
    Route::get('/ordercomp', function () {
        return view('users/ordercomp');
    })->name('ordercomp');
    

    //スタイリスト選択済み
    Route::get('u_choosestylist/{user_name}', 'UsersController@u_choosestylist')->name('u_choosestylist');
     //スタイリスト選択済み
    Route::get('u_ordercomp', 'UsersController@u_ordercomp')->name('u_ordercomp');
    
    
    //服アップロード
    Route::post('u_items/store', 'ItemsController@store');
     
    //ブランドアヴェニュー検索
    Route::get('/branditems/search/{keyword}','ItemsController@search')->name('branditems.search');
   
    //プライバシー、価格
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
    //スタイリストリクエスト受け取り
    Route::get('/s_request_lists', 'ItemsController@s_request_receive')->name('s_request_receive');
   //スタイリストコーディネート完了、送信
   Route::post('/saveco', 'ItemsController@s_saveco')->name('saveco');
   
   
   
    Route::get('/s_styling', function () {
        return view('stylists/s_styling');
    })->name('s_styling');
    

     Route::get('/sho', function () {
        return view('stylists/sho');
    })->name('sho');
    
     Route::get('/sho2', function () {
        return view('stylists/sho2');
    })->name('sho2');
    
    
    

    Route::get('/s_saving', function () {
        return view('stylists/s_saving');
    })->name('s_saving');

    
    
    Route::get('/s_online_icon', function () {
        return view('items/s_online_icon');
    })->name('s_online_icon');
    
    
    // Route::get('/s_icon', function () {
    //     return view('items/s_icon');
    // })->name('s_icon');
    
    // Route::get('/s_online_icon', function () {
    //     return view('items/s_online_icon');
    // })->name('s_online_icon');
    //ワークスペース
    // Route::get('/workspace', 'ItemsController@s_workspace')->name('workspace');
    Route::get('/s_workspace/{order}', 'ItemsController@s_workspace')->name('s_workspace');
    
    //coordinate 完成
    Route::get('/u_complete_coord', function () {
        return view('users/u_complete_coord');
    })->name('/u_complete_coord');
    
    
    Route::get('/u_coord_show', function () {
        return view('users/u_coord_show');
    })->name('/u_coord_show');

    
});


//以下参考として
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
