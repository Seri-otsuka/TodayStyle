<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'area_id',
        'temperature', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //Userテーブルに対してfashonテーブル
   public function fashons()
   {
        return $this->hasMany(Fashon::class);    
   }
   
   public function fashon_categories()
   {
       return $this->belongsToMany(Category::class, 'fashons', 'user_id', 'category_id');
   }
   
   public function is_fashon($CategoryId)
   {
        return $this->fashons()->where('category_id', $categoryId)->exists();
   }
   
   //categoryテーブルに関して
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    //areaに対して
     public function area()
    {
        return $this->belongsTo(Area::class);
    }
    
    //areas_finely対して
    public function finelyarea()
    {
        return $this->belongsTo(Finelyarea::class);//黄色の文字はモデルの名前
    }
    
    //保留
    public function category_users()
    {
        return $this->belongsToMany(Fashon::class, 'goods', 'user_id', 'article_id');
    }
    
}