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
        $fiinelyarea1 = Finelyarea::find(1);
        $fiinelyarea2 = Finelyarea::find(2);
        $fiinelyarea3 = Finelyarea::find(3);
        $fiinelyarea4 = Finelyarea::find(4);
        $fiinelyarea5 = Finelyarea::find(5);
        $fiinelyarea6 = Finelyarea::find(6);
        $fiinelyarea7 = Finelyarea::find(7);
        $fiinelyarea8 = Finelyarea::find(8);
        $fiinelyarea9 = Finelyarea::find(9);
        $fiinelyarea10 = Finelyarea::find(10);
        $fiinelyarea11 = Finelyarea::find(11);
        $fiinelyarea12 = Finelyarea::find(12);
        $fiinelyarea13 = Finelyarea::find(13);
        $fiinelyarea14 = Finelyarea::find(14);
        $fiinelyarea15 = Finelyarea::find(15);
        $fiinelyarea16 = Finelyarea::find(16);
        $fiinelyarea17 = Finelyarea::find(17);
        $fiinelyarea18 = Finelyarea::find(18);
        $fiinelyarea19 = Finelyarea::find(19);
        $fiinelyarea20 = Finelyarea::find(20);
        $fiinelyarea21 = Finelyarea::find(21);
        $fiinelyarea22 = Finelyarea::find(22);
        $fiinelyarea23 = Finelyarea::find(23);
        $fiinelyarea24 = Finelyarea::find(24);
        $fiinelyarea25 = Finelyarea::find(25);
        $fiinelyarea26 = Finelyarea::find(26);
        $fiinelyarea27 = Finelyarea::find(27);
        $fiinelyarea28 = Finelyarea::find(28);
        $fiinelyarea29 = Finelyarea::find(29);
        $fiinelyarea30 = Finelyarea::find(30);
        $fiinelyarea31 = Finelyarea::find(31);
        $fiinelyarea32 = Finelyarea::find(32);
        $fiinelyarea33 = Finelyarea::find(33);
        $fiinelyarea34 = Finelyarea::find(34);
        $fiinelyarea35 = Finelyarea::find(35);
        $fiinelyarea36 = Finelyarea::find(36);
        $fiinelyarea37 = Finelyarea::find(37);
        $fiinelyarea38 = Finelyarea::find(38);
        $fiinelyarea39 = Finelyarea::find(39);
        $fiinelyarea40 = Finelyarea::find(40);
        $fiinelyarea41 = Finelyarea::find(41);
        $fiinelyarea42 = Finelyarea::find(42);
        $fiinelyarea43 = Finelyarea::find(43);
        $fiinelyarea44 = Finelyarea::find(44);
        $fiinelyarea45 = Finelyarea::find(45);
        $fiinelyarea46 = Finelyarea::find(46);
        $fiinelyarea47 = Finelyarea::find(47);
        $fiinelyarea48 = Finelyarea::find(48);
        $fiinelyarea49 = Finelyarea::find(49);
        $fiinelyarea50 = Finelyarea::find(50);
        $fiinelyarea51 = Finelyarea::find(51);
        $fiinelyarea52 = Finelyarea::find(52);
        $fiinelyarea53 = Finelyarea::find(53);
        $fiinelyarea54 = Finelyarea::find(54);
        $fiinelyarea55 = Finelyarea::find(55);
        $fiinelyarea56 = Finelyarea::find(56);
        $fiinelyarea57 = Finelyarea::find(57);
        $fiinelyarea58 = Finelyarea::find(58);
        $fiinelyarea59 = Finelyarea::find(59);
        $fiinelyarea60 = Finelyarea::find(60);
        $fiinelyarea61 = Finelyarea::find(61);
        $fiinelyarea62 = Finelyarea::find(62);
        $fiinelyarea63 = Finelyarea::find(63);
        $fiinelyarea64 = Finelyarea::find(64);
        $fiinelyarea65 = Finelyarea::find(65);
        $fiinelyarea66 = Finelyarea::find(66);
        $fiinelyarea67 = Finelyarea::find(67);
        $fiinelyarea68 = Finelyarea::find(68);
        $fiinelyarea69 = Finelyarea::find(69);
        $fiinelyarea70 = Finelyarea::find(70);
        $fiinelyarea71 = Finelyarea::find(71);
        $fiinelyarea72 = Finelyarea::find(72);
        $fiinelyarea73 = Finelyarea::find(73);
        $fiinelyarea74 = Finelyarea::find(74);
        $fiinelyarea75 = Finelyarea::find(75);
        $fiinelyarea76 = Finelyarea::find(76);
        $fiinelyarea77 = Finelyarea::find(77);
        $fiinelyarea78 = Finelyarea::find(78);
        $fiinelyarea79 = Finelyarea::find(79);
        $fiinelyarea80 = Finelyarea::find(80);
        $fiinelyarea81 = Finelyarea::find(81);
        $fiinelyarea82 = Finelyarea::find(82);
        $fiinelyarea83 = Finelyarea::find(83);
        $fiinelyarea84 = Finelyarea::find(84);
        $fiinelyarea85 = Finelyarea::find(85);
        $fiinelyarea86 = Finelyarea::find(86);
        $fiinelyarea87 = Finelyarea::find(87);
        $fiinelyarea88 = Finelyarea::find(88);
        $fiinelyarea89 = Finelyarea::find(89);
        $fiinelyarea90 = Finelyarea::find(90);
        $fiinelyarea91 = Finelyarea::find(91);
        $fiinelyarea92 = Finelyarea::find(92);
        $fiinelyarea93 = Finelyarea::find(93);
        $fiinelyarea94 = Finelyarea::find(94);
        $fiinelyarea95 = Finelyarea::find(95);
        $fiinelyarea96 = Finelyarea::find(96);
        $fiinelyarea97 = Finelyarea::find(97);
        $area1 = Area::find(1);
        $area2 = Area::find(2);
        $area3 = Area::find(3);
        $area4 = Area::find(4);
        $area5 = Area::find(5);
        $area6 = Area::find(6);
        $area7 = Area::find(7);
        $area8 = Area::find(8);
        $area9 = Area::find(9);
        $area10 = Area::find(10);
        $area11 = Area::find(11);
        $area12 = Area::find(12);
        $area13 = Area::find(13);
        $area14 = Area::find(14);
        $area15 = Area::find(15);
        $area16 = Area::find(16);
        $area17 = Area::find(17);
        $area18 = Area::find(18);
        $area19 = Area::find(19);
        $area20 = Area::find(20);
        $area21 = Area::find(21);
        $area22 = Area::find(22);
        $area23 = Area::find(23);
        $area24 = Area::find(24);
        $area25 = Area::find(25);
        $area26 = Area::find(26);
        $area27 = Area::find(27);
        $area28 = Area::find(28);
        $area29 = Area::find(29);
        $area30 = Area::find(30);
        $area31 = Area::find(31);
        $area32 = Area::find(32);
        $area33 = Area::find(33);
        $area34 = Area::find(34);
        $area35 = Area::find(35);
        $area36 = Area::find(36);
        $area37 = Area::find(37);
        $area38 = Area::find(38);
        $area39 = Area::find(39);
        $area40 = Area::find(40);
        $area41 = Area::find(41);
        $area42 = Area::find(42);
        $area43 = Area::find(43);
        $area44 = Area::find(44);
        $area45 = Area::find(45);
        $area46 = Area::find(46);
        $area47 = Area::find(47);
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
        $n_1Finelyareas = Finelyarea::where('area_id',1)->get(); 
        $n_2Finelyareas = Finelyarea::where('area_id',2)->get(); 
        $n_3Finelyareas = Finelyarea::where('area_id',3)->get(); 
        $n_4Finelyareas = Finelyarea::where('area_id',4)->get(); 
        $n_5Finelyareas = Finelyarea::where('area_id',5)->get(); 
        $n_6Finelyareas = Finelyarea::where('area_id',6)->get(); 
        $n_7Finelyareas = Finelyarea::where('area_id',7)->get(); 
        $n_8Finelyareas = Finelyarea::where('area_id',8)->get(); 
        $n_9Finelyareas = Finelyarea::where('area_id',9)->get(); 
        $n_10Finelyareas = Finelyarea::where('area_id',10)->get(); 
        $n_11Finelyareas = Finelyarea::where('area_id',11)->get(); 
        $n_12Finelyareas = Finelyarea::where('area_id',12)->get(); 
        $n_13Finelyareas = Finelyarea::where('area_id',13)->get(); 
        $n_14Finelyareas = Finelyarea::where('area_id',14)->get(); 
        $n_15Finelyareas = Finelyarea::where('area_id',15)->get(); 
        $n_16Finelyareas = Finelyarea::where('area_id',16)->get(); 
        $n_17Finelyareas = Finelyarea::where('area_id',17)->get(); 
        $n_18Finelyareas = Finelyarea::where('area_id',18)->get(); 
        $n_19Finelyareas = Finelyarea::where('area_id',19)->get(); 
        $n_20Finelyareas = Finelyarea::where('area_id',20)->get(); 
        $n_21Finelyareas = Finelyarea::where('area_id',21)->get(); 
        $n_22Finelyareas = Finelyarea::where('area_id',22)->get(); 
        $n_23Finelyareas = Finelyarea::where('area_id',23)->get(); 
        $n_24Finelyareas = Finelyarea::where('area_id',24)->get(); 
        $n_25Finelyareas = Finelyarea::where('area_id',25)->get(); 
        $n_26Finelyareas = Finelyarea::where('area_id',26)->get(); 
        $n_27Finelyareas = Finelyarea::where('area_id',27)->get(); 
        $n_28Finelyareas = Finelyarea::where('area_id',28)->get(); 
        $n_29Finelyareas = Finelyarea::where('area_id',29)->get(); 
        $n_30Finelyareas = Finelyarea::where('area_id',30)->get(); 
        $n_31Finelyareas = Finelyarea::where('area_id',31)->get(); 
        $n_32Finelyareas = Finelyarea::where('area_id',32)->get(); 
        $n_33Finelyareas = Finelyarea::where('area_id',33)->get(); 
        $n_34Finelyareas = Finelyarea::where('area_id',34)->get(); 
        $n_35Finelyareas = Finelyarea::where('area_id',35)->get(); 
        $n_36Finelyareas = Finelyarea::where('area_id',36)->get(); 
        $n_37Finelyareas = Finelyarea::where('area_id',37)->get(); 
        $n_38Finelyareas = Finelyarea::where('area_id',38)->get(); 
        $n_39Finelyareas = Finelyarea::where('area_id',39)->get(); 
        $n_40Finelyareas = Finelyarea::where('area_id',40)->get(); 
        $n_41Finelyareas = Finelyarea::where('area_id',41)->get(); 
        $n_42Finelyareas = Finelyarea::where('area_id',42)->get(); 
        $n_43Finelyareas = Finelyarea::where('area_id',43)->get(); 
        $n_44Finelyareas = Finelyarea::where('area_id',44)->get(); 
        $n_45Finelyareas = Finelyarea::where('area_id',45)->get(); 
        $n_46Finelyareas = Finelyarea::where('area_id',46)->get(); 
        $n_47Finelyareas = Finelyarea::where('area_id',47)->get(); 
        
        return view('main.goout')->with([
            'area' => $login_users_area,
            'finelyarea' => $login_users_finelyarea,
            'categories' => $categories,
            'area_alls' => $Areas,
            'finelyarea_alls' => $Finelyareas,
            'finelyarea1' => $fiinelyarea1,
            'finelyarea2' => $fiinelyarea2,
            'finelyarea3' => $fiinelyarea3,
            'finelyarea4' => $fiinelyarea4,
            'finelyarea5' => $fiinelyarea5,
            'finelyarea6' => $fiinelyarea6,
            'finelyarea7' => $fiinelyarea7,
            'finelyarea8' => $fiinelyarea8,
            'finelyarea9' => $fiinelyarea9,
            'finelyarea10' => $fiinelyarea10,
            'finelyarea11' => $fiinelyarea11,
            'finelyarea12' => $fiinelyarea12,
            'finelyarea13' => $fiinelyarea13,
            'finelyarea14' => $fiinelyarea14,
            'finelyarea15' => $fiinelyarea15,
            'finelyarea16' => $fiinelyarea16,
            'finelyarea17' => $fiinelyarea17,
            'finelyarea18' => $fiinelyarea18,
            'finelyarea19' => $fiinelyarea19,
            'finelyarea20' => $fiinelyarea20,
            'finelyarea21' => $fiinelyarea21,
            'finelyarea22' => $fiinelyarea22,
            'finelyarea23' => $fiinelyarea23,
            'finelyarea24' => $fiinelyarea24,
            'finelyarea25' => $fiinelyarea25,
            'finelyarea26' => $fiinelyarea26,
            'finelyarea27' => $fiinelyarea27,
            'finelyarea28' => $fiinelyarea28,
            'finelyarea29' => $fiinelyarea29,
            'finelyarea30' => $fiinelyarea30,
            'finelyarea31' => $fiinelyarea31,
            'finelyarea32' => $fiinelyarea32,
            'finelyarea33' => $fiinelyarea33,
            'finelyarea34' => $fiinelyarea34,
            'finelyarea35' => $fiinelyarea35,
            'finelyarea36' => $fiinelyarea36,
            'finelyarea37' => $fiinelyarea37,
            'finelyarea38' => $fiinelyarea38,
            'finelyarea39' => $fiinelyarea39,
            'finelyarea40' => $fiinelyarea40,
            'finelyarea41' => $fiinelyarea41,
            'finelyarea42' => $fiinelyarea42,
            'finelyarea43' => $fiinelyarea43,
            'finelyarea44' => $fiinelyarea44,
            'finelyarea45' => $fiinelyarea45,
            'finelyarea46' => $fiinelyarea46,
            'finelyarea47' => $fiinelyarea47,
            'finelyarea48' => $fiinelyarea48,
            'finelyarea49' => $fiinelyarea49,
            'finelyarea50' => $fiinelyarea50,
            'finelyarea51' => $fiinelyarea51,
            'finelyarea52' => $fiinelyarea52,
            'finelyarea53' => $fiinelyarea53,
            'finelyarea54' => $fiinelyarea54,
            'finelyarea55' => $fiinelyarea55,
            'finelyarea56' => $fiinelyarea56,
            'finelyarea57' => $fiinelyarea57,
            'finelyarea58' => $fiinelyarea58,
            'finelyarea59' => $fiinelyarea59,
            'finelyarea60' => $fiinelyarea60,
            'finelyarea61' => $fiinelyarea61,
            'finelyarea62' => $fiinelyarea62,
            'finelyarea63' => $fiinelyarea63,
            'finelyarea64' => $fiinelyarea64,
            'finelyarea65' => $fiinelyarea65,
            'finelyarea66' => $fiinelyarea66,
            'finelyarea67' => $fiinelyarea67,
            'finelyarea68' => $fiinelyarea68,
            'finelyarea69' => $fiinelyarea69,
            'finelyarea70' => $fiinelyarea70,
            'finelyarea71' => $fiinelyarea71,
            'finelyarea72' => $fiinelyarea72,
            'finelyarea73' => $fiinelyarea73,
            'finelyarea74' => $fiinelyarea74,
            'finelyarea75' => $fiinelyarea75,
            'finelyarea76' => $fiinelyarea76,
            'finelyarea77' => $fiinelyarea77,
            'finelyarea78' => $fiinelyarea78,
            'finelyarea79' => $fiinelyarea79,
            'finelyarea80' => $fiinelyarea80,
            'finelyarea81' => $fiinelyarea81,
            'finelyarea82' => $fiinelyarea82,
            'finelyarea83' => $fiinelyarea83,
            'finelyarea84' => $fiinelyarea84,
            'finelyarea85' => $fiinelyarea85,
            'finelyarea86' => $fiinelyarea86,
            'finelyarea87' => $fiinelyarea87,
            'finelyarea88' => $fiinelyarea88,
            'finelyarea89' => $fiinelyarea89,
            'finelyarea90' => $fiinelyarea90,
            'finelyarea91' => $fiinelyarea91,
            'finelyarea92' => $fiinelyarea92,
            'finelyarea93' => $fiinelyarea93,
            'finelyarea94' => $fiinelyarea94,
            'finelyarea95' => $fiinelyarea95,
            'finelyarea96' => $fiinelyarea96,
            'finelyarea97' => $fiinelyarea97,
            'area1' => $area1,
            'area2' => $area2,
            'area3' => $area3,
            'area4' => $area4,
            'area5' => $area5,
            'area6' => $area6,
            'area7' => $area7,
            'area8' => $area8,
            'area9' => $area9,
            'area10' => $area10,
            'area11' => $area11,
            'area12' => $area12,
            'area13' => $area13,
            'area14' => $area14,
            'area15' => $area15,
            'area16' => $area16,
            'area17' => $area17,
            'area18' => $area18,
            'area19' => $area19,
            'area20' => $area20,
            'area21' => $area21,
            'area22' => $area22,
            'area23' => $area23,
            'area24' => $area24,
            'area25' => $area25,
            'area26' => $area26,
            'area27' => $area27,
            'area28' => $area28,
            'area29' => $area29,
            'area30' => $area30,
            'area31' => $area31,
            'area32' => $area32,
            'area33' => $area33,
            'area34' => $area34,
            'area35' => $area35,
            'area36' => $area36,
            'area37' => $area37,
            'area38' => $area38,
            'area39' => $area39,
            'area40' => $area40,
            'area41' => $area41,
            'area42' => $area42,
            'area43' => $area43,
            'area44' => $area44,
            'area45' => $area45,
            'area46' => $area46,
            'area47' => $area47,
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
            'n_1Finelyareas' => $n_1Finelyareas,
            'n_2Finelyareas' => $n_2Finelyareas,
            'n_3Finelyareas' => $n_3Finelyareas,
            'n_4Finelyareas' => $n_4Finelyareas,
            'n_5Finelyareas' => $n_5Finelyareas,
            'n_6Finelyareas' => $n_6Finelyareas,
            'n_7Finelyareas' => $n_7Finelyareas,
            'n_8Finelyareas' => $n_8Finelyareas,
            'n_9Finelyareas' => $n_9Finelyareas,
            'n_10Finelyareas' => $n_10Finelyareas,
            'n_11Finelyareas' => $n_11Finelyareas,
            'n_12Finelyareas' => $n_12Finelyareas,
            'n_13Finelyareas' => $n_13Finelyareas,
            'n_14Finelyareas' => $n_14Finelyareas,
            'n_15Finelyareas' => $n_15Finelyareas,
            'n_16Finelyareas' => $n_16Finelyareas,
            'n_17Finelyareas' => $n_17Finelyareas,
            'n_18Finelyareas' => $n_18Finelyareas,
            'n_19Finelyareas' => $n_19Finelyareas,
            'n_20Finelyareas' => $n_20Finelyareas,
            'n_21Finelyareas' => $n_21Finelyareas,
            'n_22Finelyareas' => $n_22Finelyareas,
            'n_23Finelyareas' => $n_23Finelyareas,
            'n_24Finelyareas' => $n_24Finelyareas,
            'n_25Finelyareas' => $n_25Finelyareas,
            'n_26Finelyareas' => $n_26Finelyareas,
            'n_27Finelyareas' => $n_27Finelyareas,
            'n_28Finelyareas' => $n_28Finelyareas,
            'n_29Finelyareas' => $n_29Finelyareas,
            'n_30Finelyareas' => $n_30Finelyareas,
            'n_31Finelyareas' => $n_31Finelyareas,
            'n_32Finelyareas' => $n_32Finelyareas,
            'n_33Finelyareas' => $n_33Finelyareas,
            'n_34Finelyareas' => $n_34Finelyareas,
            'n_35Finelyareas' => $n_35Finelyareas,
            'n_36Finelyareas' => $n_36Finelyareas,
            'n_37Finelyareas' => $n_37Finelyareas,
            'n_38Finelyareas' => $n_38Finelyareas,
            'n_39Finelyareas' => $n_39Finelyareas,
            'n_40Finelyareas' => $n_40Finelyareas,
            'n_41Finelyareas' => $n_41Finelyareas,
            'n_42Finelyareas' => $n_42Finelyareas,
            'n_43Finelyareas' => $n_43Finelyareas,
            'n_44Finelyareas' => $n_44Finelyareas,
            'n_45Finelyareas' => $n_45Finelyareas,
            'n_46Finelyareas' => $n_46Finelyareas,
            'n_47Finelyareas' => $n_47Finelyareas,
            
            
            
            ]);
    }
    
    //ログインユーザーのお住いの地域の表示メソッド
    public function todouhuken()
    {
        $login_users_area = \Auth::user()->area;
        $login_users_finelyarea = \Auth::user()->finelyarea;
        $categories = \Auth::user()->fashon_categories()->get();
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
        
        
        return view('main.index')->with([
            'area' => $login_users_area,
            'finelyarea' => $login_users_finelyarea,
            'categories' => $categories,
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
