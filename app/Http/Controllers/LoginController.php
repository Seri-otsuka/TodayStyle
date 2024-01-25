<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     protected function redirectTo()
    {
        // ログインしたときのリダイレクト先を指定
        return '/main'; // 例えば、ダッシュボードにリダイレクト
    }
}
