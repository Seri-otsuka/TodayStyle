<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fashon;
use App\Models\User;
use App\Models\Category;

class FashonController extends Controller
{
        //
     public function fashon(Fashon $fashon)
    {
        return view('main.index')->with([
             'fashons' => $fashon
            ]);
    }
     //登録
      public function store($categoryID) {
        $user = \Auth::user();
        if (!$user->is_fashon($categoryId)) {
            $user->fashon_categories()->attach($categoryId);
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
