<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashonController extends Controller
{
        //
     public function fashon(Fashon $fashon)
    {
        return $fashon->get();
    }
     //登録
      public function store($categoryID) {
        $user = \Auth::user();
        if (!$user->is_fashon($categoryId)) {
            $user->fashon_articles()->attach($categoryId);
        }
        return back();
    }
   //解除
    public function destroy($categoryId) {
        $user = \Auth::user();
        if ($user->is_fashon($categoryId)) {
            $user->fashon_categories()->detach($categoryId);
        }
        return back();
    }
}
