<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
     //表示一覧のメソッド
    public function category(Category $category, User $user)
    {
        
        return view('categories.index')->with([
            'users' => $user,
            'categories' => $category->getPaginateByLimit(20)]);
    }
}
