<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;


// モデル修正
use App\User;

class AuthController extends Controller
{
    use RegistersUsers;
    
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
        //
        // プロパティ設定
    protected $guard = 'users';                   // 使用するguard名(デフォルトはauth.phpのデフォルト設定してあるguard)
    protected $registerView = 'auth.user_register_or_login';   // 新規登録画面のview(デフォルトは「auth.register」)
    protected $loginView = 'auth.user_register_or_login';         // ログインページのview(デフォルトは「auth.authenticate」)
    protected $redirectTo = 'home';                // ログイン後のリダイレクト先(デフォルトは「/home」)
    protected $redirectAfterLogout = 'auth.user_register_or_login';                  // ログアウト後のリダイレクト先(デフォルトは「/」)
    protected $username = 'user_name';                         // 認証用のカラム(デフォルトは「email」)
    protected $maxLoginAttempts = 10;                       // ログインスロットルとなるまで最高のログイン失敗回数(デフォルトは「5」)
    protected $lockoutTime = 60;                           // ログインスロットルとなってからの待ち秒数(デフォルトは60)
    

    
    // テーブル修正
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_name' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    
    // モデル修正
    protected function create(array $data)
    {
        return User::create([
            'user_name' => $data['user_name'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
