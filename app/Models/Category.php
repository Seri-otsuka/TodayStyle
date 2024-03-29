<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
   protected $fillable = [
        'name',
        'genre',
        'image_true',
        'image_false',
    ];
    
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    
	public function fashon()
    {
        return $this->belongsTo(Fashon::class);
    }
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
    public function fashon_categories()
    {
        return $this->belongsToMany(User::class, 'fashons', 'category_id', 'user_id');
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'fashons', 'category_id', 'user_id');
    }

}
