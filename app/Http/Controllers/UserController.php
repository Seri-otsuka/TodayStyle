<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Iamge;
use App\Models\Area;
use App\Models\Category;
use App\Models\Finelyarea;


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
   
    public function area(Area $area,User $user)
    {
        return view('auth.register')->with([
            'users' => $user,
            
            //データを呼び出す
            $area = Area::get()]);
    }
    
    //gooutページにareaテーブルのデータ全件渡す
    public function goout(Area $area,User $user)
    {
        return view('main.goout')->with([
            'users' => $user,
            
            //データを呼び出す
            $area = Area::get()]);
    }
    
    //ログインユーザーのお住いの地域の表示メソッド
    public function todouhuken()
    {
        $login_users_area = \Auth::user()->area;
        $login_users_finelyarea = \Auth::user()->finelyarea;
        
        return view('main.index')->with([
            'area' => $login_users_area,
            'finelyarea' => $login_users_finelyarea,
            ]);
    }
    
        public function coordination()
    {
        $login_users_area = \Auth::user()->area;
        $login_users_finelyarea = \Auth::user()->finelyarea;
        
        return view('main.coordination')->with([
            'area' => $login_users_area,
            'finelyarea' => $login_users_finelyarea,
            ]);
    }
    
    
}
