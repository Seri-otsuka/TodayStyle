<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FashonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テストユーザー1さんの所持済みの服のデータ
        //キャミ
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //ノースリーブ
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '7',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '8',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '9',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '10',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '11',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //長ズボン
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '13',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('fashons')->insert([
            'user_id' => '22',
            'category_id' => '14',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //テストユーザー2さんの所持している服のデー
        
        
    }
}
