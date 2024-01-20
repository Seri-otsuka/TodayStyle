<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'category_id',
        'path',
    ];
    
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function categry()
    {
        return $this->belongsTo(Category::class);
    }
    
}
