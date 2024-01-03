<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

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

}
