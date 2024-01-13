<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fashon extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'category_id',
    ];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //ファッションはカテゴリーに対して多く存在する
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
