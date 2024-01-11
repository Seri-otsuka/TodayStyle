<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finelyarea extends Model
{
    use HasFactory;
    
     //書いたクラス内、継承されるクラス内で使用可能(グローバス変数みたいなもん)
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'path',
        ];
    
    
    //usersテーブルに対してのリレーション
    public function users()
    {
        return $this->hasMany(User::class,'finelyarea_id', 'id');    
    }
}
