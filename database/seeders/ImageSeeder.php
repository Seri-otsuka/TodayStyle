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
            'category_id' => '14',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880549/%E3%82%B9%E3%82%AB%E3%83%BC%E3%83%88%EF%BC%95_pv2mdq.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '14',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880548/%E3%82%B9%E3%82%AB%E3%83%BC%E3%83%887_ieicey.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '14',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880548/%E3%82%B9%E3%82%AB%E3%83%BC%E3%83%886_qceogu.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
            
            
        //キャミ2個目
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '13',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880525/%E3%83%91%E3%83%B3%E3%83%845_ne3c5q.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '13',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880524/%E3%83%91%E3%83%B3%E3%83%844_uaffv0.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '13',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880517/%E3%83%91%E3%83%B3%E3%83%846_kzicly.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        
        //ノースリーブ
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '6',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880523/%E3%82%AB%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AC%E3%83%B37_x0ftln.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '6',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880518/%E3%82%AB%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AC%E3%83%B36_wy4g5a.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '6',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880518/%E3%82%AB%E3%83%BC%E3%83%87%E3%82%A3%E3%82%AC%E3%83%B35_wxdhcl.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        //半袖
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '11',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880492/%E3%83%80%E3%82%A6%E3%83%B3%E9%BB%92_-_%E3%82%B3%E3%83%94%E3%83%BC_z9emv9.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        //半ズボン
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880491/%E5%8D%8A%E8%A2%965_-_%E3%82%B3%E3%83%94%E3%83%BC_owncbx.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
     DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880491/%E5%8D%8A%E8%A2%967_-_%E3%82%B3%E3%83%94%E3%83%BC_xzlxw1.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
            
        //スカート
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '9',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880490/%E3%83%8B%E3%83%83%E3%83%885_-_%E3%82%B3%E3%83%94%E3%83%BC_pgtmbw.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '9',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880483/%E3%83%8B%E3%83%83%E3%83%883_-_%E3%82%B3%E3%83%94%E3%83%BC_trx4ob.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
            
        //ワンピース
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880437/%E3%83%8E%E3%83%BC%E3%82%B9%E3%83%AA%E3%83%BC%E3%83%965_orvyvn.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880437/%E3%83%8E%E3%83%BC%E3%82%B9%E3%83%AA%E3%83%BC%E3%83%964_voy3ir.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880437/%E3%83%8E%E3%83%BC%E3%82%B9%E3%83%AA%E3%83%BC%E3%83%968_rpepzq.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
        
        //ユーザー2の情報
        //ワンピース
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '10',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880394/%E3%83%91%E3%83%BC%E3%82%AB%E3%83%BC8_vongd4.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '10',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880394/%E3%83%91%E3%83%BC%E3%82%AB%E3%83%BC7_jmfelu.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
            
            
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880394/%E3%82%AD%E3%83%A3%E3%83%9F%E3%82%BD%E3%83%BC%E3%83%AB5_pcjugr.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880393/%E3%82%AD%E3%83%A3%E3%83%9F%E3%82%BD%E3%83%BC%E3%83%AB2_wklijt.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        
        
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '8',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880329/%E3%82%BF%E3%83%BC%E3%83%88%E3%83%AB7_anfkro.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '8',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880329/%E3%82%BF%E3%83%BC%E3%83%88%E3%83%AB4_c4mv2b.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
            
            
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '5',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880298/%E3%82%B7%E3%83%A3%E3%83%847_g43val.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '5',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880298/%E3%82%B7%E3%83%A3%E3%83%846_nk8ydq.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '5',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880298/%E3%82%B7%E3%83%A3%E3%83%842_alajcc.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
            
            
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880234/%E9%95%B7%E8%A2%962_agkex4.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
         DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880234/%E9%95%B7%E8%A2%966_yhfdcv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880234/%E9%95%B7%E8%A2%966_yhfdcv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        DB::table('images')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1705880234/%E9%95%B7%E8%A2%964_lkmfxa.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
            ]);
            
        
    }
}
