<?php

namespace App\Http\Controllers\Stylist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    
    protected $guard = 'stylists';                            // auth.guard設定(デフォルトはauth.phpでデフォルト設定したguard)
    protected $broker = 'stylists';                           // auth.passwords設定('デフォルトはauth.phpでデフォルト設定したpasswords')
    // protected $linkRequestView = 'admin_accounts.passwords.email';  // メールアドレス入力view(デフォルトは「auth.passwords.email」)
    // protected $resetView = 'auth.passwords.s_reset';        // パスワードリセットページview(デフォルトは「auth.passwords.reset」or「auth.reset」)
    protected $subject = 'Password Reset';                          // リセットリンクメールの件名(デフォルトは「Your Password Reset Link」)
    protected $redirectTo = 'home';                                    // パスワード変更後のリダイレクト先(デフォルトは「/home」)
}
