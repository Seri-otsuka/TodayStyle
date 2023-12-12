<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(User $user)
    {
        return $user->get();
    }
   public function __construct()
  {
    // コントローラの全アクションに対して認証を要求する
    $this->middleware('auth');
  }


  public function show($id)
  {
    if (\Auth::user()->id != $id){
      // ログインしているユーザidと表示しようとしている$idが異なる
      return redirect('/home');
    }
    $user = User::find($id);
    return view('users.show')
        ->with('user', $user);  
   }

}
