<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    protected $guard = 'users';                            // auth.guard設定(デフォルトはauth.phpでデフォルト設定したguard)
    protected $broker = 'users';                           // auth.passwords設定('デフォルトはauth.phpでデフォルト設定したpasswords')
    // protected $linkRequestView = 'admin_accounts.passwords.email';  // メールアドレス入力view(デフォルトは「auth.passwords.email」)
    // protected $resetView = 'auth.passwords.u_reset';        // パスワードリセットページview(デフォルトは「auth.passwords.reset」or「auth.reset」)
    protected $subject = 'Password Reset';                          // リセットリンクメールの件名(デフォルトは「Your Password Reset Link」)
    protected $redirectTo = 'home';   
}
