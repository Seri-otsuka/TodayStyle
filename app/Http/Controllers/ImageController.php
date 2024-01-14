<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Iamge;
use App\Models\Category;
use App\Models\Fashon;

class ImageController extends Controller
{
    public function store(Request $request,Category $category)
    {
        $input = $request['image'];
        $image = new Image();
        $image->user_id = \Auth::id();
        $image->category_id = $category->id;
        $image->path = $request->path;
        $image->save();
        return redirect()->route('main.coordination',$category);
    }
       
}
