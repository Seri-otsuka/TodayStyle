<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Fashon;
use Cloudinary;

class CategoryController extends Controller
{
     //表示一覧のメソッド
    public function category(Category $category, User $user)
    {
        
        return view('main.index')->with([
            'users' => $user,
 	     //データを呼び出す
            'categories' => $category->get()]);
    }
    
    //所持している服の情報を取得する
     public function fashon_categories()
    {
        $categories = \Auth::user()->fashon_categories();
        $data = [
            'categories' => $categories,
        ];
        return view('main.index', $data);
    }
    
    
    

}
