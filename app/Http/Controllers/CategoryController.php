<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    //保存のメソッド
    public function store(Category $category, CategoryRequest $request)
    {
	//値取得
        $input = $request['category'];
        $category = new Category();
        $category->user_id = \Auth::id();
        
        //画像
        //$category_image = $request->file('image');
        if($category_image){
	    //Cloudinaryを使用して画像をアップロード
            $image_url = Cloudinary::upload(($article_image)->getRealPath())->getSecurePath();
            $input += ['image' => $image_url];
        }else{
            $path = null;
        }
        $category->fill($input)->save();
        
        return redirect('/categories/' . $category->id);
    }
    
    //編集のメソッド
    public function edit(Category $category)
    {
        $this->authorize($category);
        $data = ['category' => $category];
        return view('categories.edit')->with([
            'category' => $category]);
    }

}
