<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use App\Models\Fashon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class ImageController extends Controller
{
    
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
    
        return view('images.create', compact('users', 'categories'));

    }
    
   public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'category_id' => 'required|exists:categories,id',
        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

    ]);

    $uploadedImages = [];

    foreach ($request->file('images') as $image) {
        $result = Cloudinary::upload($image->getRealPath());
        $image_url = $result->getSecurePath();

        $uploadedImages[] = Image::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'path' => $image_url, // ここで path カラムに画像の URL を保存
        ]);
    }

    return redirect()->route('images.index')->with('success', 'Images uploaded successfully');
}
    
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }
           
}
