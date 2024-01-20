<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use App\Models\Fashon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;


class ImageController extends Controller
{
    
    public function create()
    
    
    {

        $users = User::all();
        $categories = Category::all();
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
    
        return view('images.create', compact('users', 'categories'))->with([
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
    
   public function store(Request $request)
{
    
    
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',

    ]);

     // 現在のログインユーザーの ID を取得
    $loggedInUserId = Auth::id();
    
     Fashon::firstOrCreate([
        'user_id' => $loggedInUserId,
        'category_id' => $request->category_id,
    ]);
    $uploadedImages = [];

    foreach ($request->file('images') as $image) {
        $result = Cloudinary::upload($image->getRealPath());
        $image_url = $result->getSecurePath();

        $uploadedImages[] = Image::create([
            'user_id' => $loggedInUserId,
            'category_id' => $request->category_id,
            'path' => $image_url, // ここで path カラムに画像の URL を保存
        ]);
    }

    return redirect()->route('images.create')->with('success', 'Images uploaded successfully');
}
    
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }
           
}
