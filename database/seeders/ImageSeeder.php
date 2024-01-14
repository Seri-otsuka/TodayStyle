<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ユーザー1の登録している画像
        //キャミ一個目
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705217997/%E7%84%A1%E9%A1%8C94_20240114163245_ka0jnn.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        //キャミ2個目
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705217997/%E7%84%A1%E9%A1%8C94_20240114163257_hntkgp.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        //ノースリーブ
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705217998/%E7%84%A1%E9%A1%8C94_20240114163322_aievws.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        //半袖
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705217998/%E7%84%A1%E9%A1%8C94_20240114163336_gttoga.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        //半ズボン
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '12',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705217998/%E7%84%A1%E9%A1%8C94_20240114163351_yesllg.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        //スカート
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '14',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705218852/%E7%84%A1%E9%A1%8C2_20240114165300_q4bsoe.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        //ワンピース
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '15',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705217998/%E7%84%A1%E9%A1%8C94_20240114163430_esmhhw.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        //ユーザー2の情報
        //ワンピース
        DB::table('images')->insert([
            'user_id' => '2',
            'category_id' => '15',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705217998/%E7%84%A1%E9%A1%8C94_20240114163444_ywi2b4.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
    }
}
