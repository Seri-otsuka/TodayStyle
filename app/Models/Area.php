<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    
    //書いたクラス内、継承されるクラス内で使用可能(グローバス変数みたいなもん)
    protected $fillable = [
        'name',
        ];
    
    
    //usersテーブルに対してのリレーション
    public function users()
    {
        return $this->hasMany(User::class,'area_id', 'id');    
    }
    //ユーザーに対して1:1
     /* public function user()
    {
        return $this->belongsTo(User::class);
    }*/
}
