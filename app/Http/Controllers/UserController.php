<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Iamge;
use App\Models\Area;
use App\Models\Category;
use App\Models\Fashon;
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
    public function goout()
    {
        $login_users_area = \Auth::user()->area;
        $login_users_finelyarea = \Auth::user()->finelyarea;
        $categories = \Auth::user()->fashon_categories()->get();
        $Areas = Area::get();   //都道府県全件
        $Finelyareas = Finelyarea::get();  //地域詳細全件
        
        return view('main.goout')->with([
            'area' => $login_users_area,
            'finelyarea' => $login_users_finelyarea,
            'categories' => $categories,
            'area_alls' => $Areas,
            'finelyarea_alls' => $Finelyareas,
            ]);
    }
    
    //ログインユーザーのお住いの地域の表示メソッド
    public function todouhuken()
    {
        $login_users_area = \Auth::user()->area;
        $login_users_finelyarea = \Auth::user()->finelyarea;
        $categories = \Auth::user()->fashon_categories()->get();
        
        return view('main.index')->with([
            'area' => $login_users_area,
            'finelyarea' => $login_users_finelyarea,
            'categories' => $categories,
            ]);
    }
    
    public function coordination()
    {
        $login_users_area = \Auth::user()->area;
        $login_users_finelyarea = \Auth::user()->finelyarea;
        $categories = \Auth::user()->fashon_categories()->get();
        $n_1categories = \Auth::user()->fashon_categories()->where('category_id',1)->get();
        $n_2categories = \Auth::user()->fashon_categories()->where('category_id',2)->get();
        $n_3categories = \Auth::user()->fashon_categories()->where('category_id',3)->get();
        $n_4categories = \Auth::user()->fashon_categories()->where('category_id',4)->get();
        $n_5categories = \Auth::user()->fashon_categories()->where('category_id',5)->get();
        $n_6categories = \Auth::user()->fashon_categories()->where('category_id',6)->get();
        $n_7categories = \Auth::user()->fashon_categories()->where('category_id',7)->get();
        $n_8categories = \Auth::user()->fashon_categories()->where('category_id',8)->get();
        $n_9categories = \Auth::user()->fashon_categories()->where('category_id',9)->get();
        $n_10categories = \Auth::user()->fashon_categories()->where('category_id',10)->get();
        $n_11categories = \Auth::user()->fashon_categories()->where('category_id',11)->get();
        $n_12categories = \Auth::user()->fashon_categories()->where('category_id',12)->get();
        $n_13categories = \Auth::user()->fashon_categories()->where('category_id',13)->get();
        $n_14categories = \Auth::user()->fashon_categories()->where('category_id',14)->get();
        $n_15categories = \Auth::user()->fashon_categories()->where('category_id',15)->get();
        $Categories = Category::get(); 
        $category1 = Category::find(1);
        $category2 = Category::find(2);
        $category3 = Category::find(3);
        $category4 = Category::find(4);
        $category5 = Category::find(5);
        $category6 = Category::find(6);
        $category7 = Category::find(7);
        $category8 = Category::find(8);
        $category9 = Category::find(9);
        $category10 = Category::find(10);
        $category11 = Category::find(11);
        $category12 = Category::find(12);
        $category13 = Category::find(13);
        $category14 = Category::find(14);
        $category15 = Category::find(15);
        
        
        
        return view('main.coordination')->with([
            'area' => $login_users_area,
            'finelyarea' => $login_users_finelyarea,
            'categories' => $categories,
            'n_1categories' => $n_1categories,
            'n_2categories' => $n_2categories,
            'n_3categories' => $n_3categories,
            'n_4categories' => $n_4categories,
            'n_5categories' => $n_5categories,
            'n_6categories' => $n_6categories,
            'n_7categories' => $n_7categories,
            'n_8categories' => $n_8categories,
            'n_9categories' => $n_9categories,
            'n_10categories' => $n_10categories,
            'n_11categories' => $n_11categories,
            'n_12categories' => $n_12categories,
            'n_13categories' => $n_13categories,
            'n_14categories' => $n_14categories,
            'n_15categories' => $n_15categories,
            'category_alls' => $Categories,
            'category1' => $category1,
            'category2' => $category2,
            'category3' => $category3,
            'category4' => $category4,
            'category5' => $category5,
            'category6' => $category6,
            'category7' => $category7,
            'category8' => $category8,
            'category9' => $category9,
            'category10' => $category10,
            'category11' => $category11,
            'category12' => $category12,
            'category13' => $category13,
            'category14' => $category14,
            'category15' => $category15,
            ]);
    }
    
    
}
