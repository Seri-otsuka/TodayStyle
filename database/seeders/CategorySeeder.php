<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //キャミソール
         DB::table('categories')->insert([
            'name' => 'キャミソール',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702433037/%E7%84%A1%E9%A1%8C287_20231213101833_skqbru.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203326_s3xmu4.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //ノースリーブ
         DB::table('categories')->insert([
            'name' => 'ノースリーブ',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0294_ziqwci.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203412_r6sovt.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半袖
         DB::table('categories')->insert([
            'name' => '半袖',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B39_zsyouc.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203334_aithlb.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //長袖
         DB::table('categories')->insert([
            'name' => '長袖',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%E3%83%AD%E3%83%B3%E3%82%B0T%E3%82%B7%E3%83%A3%E3%83%84%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_tall3d.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203347_loibhu.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //シャツ
         DB::table('categories')->insert([
            'name' => 'シャツ',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/Y%E3%82%B7%E3%83%A3%E3%83%84%E3%81%AE%E3%82%A4%E3%83%A9%E3%82%B9%E3%83%88%E7%B4%A0%E6%9D%905_scezds.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203351_r0cbgl.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //カーディガン
         DB::table('categories')->insert([
            'name' => 'カーディガン',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0292_co2req.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203408_luvbqi.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //ジャケット
         DB::table('categories')->insert([
            'name' => 'ジャケット',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%82%B8%E3%83%A3%E3%82%B1%E3%83%83%E3%83%88%E3%81%AE%E3%82%A4%E3%83%A9%E3%82%B9%E3%83%88%E7%B4%A0%E6%9D%902_axoaz6.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203319_bzhvix.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //タートルネック
         DB::table('categories')->insert([
            'name' => 'タートルネック',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%82%BF%E3%83%BC%E3%83%88%E3%83%AB%E3%83%8D%E3%83%83%E3%82%AF%E3%81%AE%E7%84%A1%E6%96%99%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3_plixtm.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203315_ruwc1p.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //ニット
         DB::table('categories')->insert([
            'name' => 'ニット',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0287_wfezcx.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203337_gufjdi.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //パーカー
         DB::table('categories')->insert([
            'name' => 'パーカー',
            'genre' => '0',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/%E3%83%91%E3%83%BC%E3%82%AB%E3%83%BC%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_vl1pu3.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203400_qrbsrb.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //コート/ダウン
         DB::table('categories')->insert([
            'name' => 'コート/ダウン',
            'genre' => '2',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347926/%E3%83%80%E3%82%A6%E3%83%B3%E3%82%B8%E3%83%A3%E3%82%B1%E3%83%83%E3%83%88%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B32_mcfxxc.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203404_hjobme.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //半ズボン
         DB::table('categories')->insert([
            'name' => '半ズボン',
            'genre' => '1',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0286_gtidl0.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427289/%E7%84%A1%E9%A1%8C287_20231212203311_pcjnsw.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //長ズボン
         DB::table('categories')->insert([
            'name' => '長ズボン',
            'genre' => '1',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0285_kuszgu.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203356_d9p0lg.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //スカート
         DB::table('categories')->insert([
            'name' => 'スカート',
            'genre' => '1',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0295_yzvvwv.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203330_nqc7ht.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //ワンピース
         DB::table('categories')->insert([
            'name' => 'ワンピース',
            'genre' => '2',
            'image_true' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1702347922/icon_R_0290_ststiv.png',
            'image_false' =>'https://res.cloudinary.com/dlfimibcq/image/upload/v1702427288/%E7%84%A1%E9%A1%8C287_20231212203342_ctknrq.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
    }
}
