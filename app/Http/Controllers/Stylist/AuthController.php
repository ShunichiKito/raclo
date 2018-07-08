<?php

// 名前空間修正
namespace App\Http\Controllers\Stylist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;

// モデル修正
use App\Stylist;

class AuthController extends Controller
{
    //
    use RegistersUsers;
            //
        // プロパティ設定
    protected $guard = 'stylists';                   // 使用するguard名(デフォルトはauth.phpのデフォルト設定してあるguard)
    protected $registerView = 'auth.stylist_register_or_login';   // 新規登録画面のview(デフォルトは「auth.register」)
    protected $loginView = 'auth.stylist_register_or_login';         // ログインページのview(デフォルトは「auth.authenticate」)
    protected $redirectTo = 'home';                // ログイン後のリダイレクト先(デフォルトは「/home」)
    protected $redirectAfterLogout = 'auth.stylist_register_or_login';                  // ログアウト後のリダイレクト先(デフォルトは「/」)
    protected $username = 'stylist_name';                         // 認証用のカラム(デフォルトは「email」)
    protected $maxLoginAttempts = 10;                       // ログインスロットルとなるまで最高のログイン失敗回数(デフォルトは「5」)
    protected $lockoutTime = 60;                           // ログインスロットルとなってからの待ち秒数(デフォルトは60)
    

    
    // テーブル修正
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'stylist_name' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    
    // モデル修正
    protected function create(array $data)
    {
        return Stylist::create([
            'stylist_name' => $data['stylist_name'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'background' => $data['background'],
            'style' => $data['style'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
