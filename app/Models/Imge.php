<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imge extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'path',
    ];
    
      //ファッションはカテゴリーに対して多く存在する
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
