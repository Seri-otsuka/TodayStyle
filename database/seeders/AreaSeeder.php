<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //完成
         DB::table('areas')->insert([
            'name' => '北海道',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E5%8C%97%E6%B5%B7%E9%81%93%E5%85%A8%E4%BD%93_hrcsg1.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
	 DB::table('areas')->insert([
            'name' => '青森県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E9%9D%92%E6%A3%AE%E5%85%A8%E4%BD%93_aauzea.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '岩手県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E5%B2%A9%E6%89%8B%E5%85%A8%E4%BD%93_xw51dv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '宮城県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E5%AE%AE%E5%9F%8E%E5%85%A8%E4%BD%93_gxh8dy.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '秋田県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E7%A7%8B%E7%94%B0%E5%85%A8%E4%BD%93_ajon1z.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
       
	DB::table('areas')->insert([
            'name' => '山形県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E5%B1%B1%E5%BD%A2%E5%85%A8%E4%BD%93_agc7gi.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '福島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450028/%E7%A6%8F%E5%B3%B6%E5%85%A8%E4%BD%93_u55oqe.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '茨城県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450637/%E8%8C%A8%E5%9F%8E%E5%85%A8%E4%BD%93_i7trgx.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '栃木県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450638/%E6%A0%83%E6%9C%A8%E5%85%A8%E4%BD%93_rbjf59.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
    DB::table('areas')->insert([
            'name' => '群馬県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450638/%E7%BE%A4%E9%A6%AC%E5%85%A8%E4%BD%93_bjxqpi.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '埼玉県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450638/%E5%9F%BC%E7%8E%89%E5%85%A8%E4%BD%93_y0jein.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '千葉県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450637/%E5%8D%83%E8%91%89%E5%85%A8%E4%BD%93_ilpinb.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '東京都',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450637/%E6%9D%B1%E4%BA%AC%E5%85%A8%E4%BD%93_m6fqqc.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '神奈川県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704450637/%E7%A5%9E%E5%A5%88%E5%B7%9D%E5%85%A8%E4%BD%93_m9cp6k.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '新潟県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451466/%E6%96%B0%E6%BD%9F%E5%85%A8%E4%BD%93_qjog5n.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
    DB::table('areas')->insert([
            'name' => '富山県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451467/%E5%AF%8C%E5%B1%B1%E5%85%A8%E4%BD%93_gdn5vm.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '石川県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451466/%E7%9F%B3%E5%B7%9D%E5%85%A8%E4%BD%93_tpyzwe.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '福井県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451467/%E7%A6%8F%E4%BA%95%E5%85%A8%E4%BD%93_ehplz6.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '山梨県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451466/%E5%B1%B1%E6%A2%A8%E5%85%A8%E4%BD%93_tafwpv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '長野県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451466/%E9%95%B7%E9%87%8E%E5%85%A8%E4%BD%93_hwnng0.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '岐阜県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451468/%E5%B2%90%E9%98%9C%E5%85%A8%E4%BD%93_ydunxv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '静岡県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451466/%E9%9D%99%E5%B2%A1%E5%85%A8%E4%BD%93_gyugri.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '愛知県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451467/%E6%84%9B%E7%9F%A5%E5%85%A8%E4%BD%93_svddey.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '三重県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451956/%E4%B8%89%E9%87%8D%E5%85%A8%E4%BD%93_gayqa0.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
    //とりあえず琵琶湖なしver.
     DB::table('areas')->insert([
            'name' => '滋賀県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451956/%E6%BB%8B%E8%B3%80%E5%85%A8%E4%BD%93_fqrxmv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '京都県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451958/%E4%BA%AC%E9%83%BD%E5%85%A8%E4%BD%93_zhcwnz.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '大阪府',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451956/%E5%A4%A7%E9%98%AA%E5%85%A8%E4%BD%93_b4ldd4.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '兵庫県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451957/%E5%85%B5%E5%BA%AB%E5%85%A8%E4%BD%93_v2zzos.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '奈良県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451957/%E5%A5%88%E8%89%AF%E5%85%A8%E4%BD%93_wla8ue.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '和歌山県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704451957/%E5%92%8C%E6%AD%8C%E5%B1%B1%E5%85%A8%E4%BD%93_wityac.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '鳥取県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452614/%E9%B3%A5%E5%8F%96%E5%85%A8%E4%BD%93_jbrkva.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '岡山県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452617/%E5%B2%A1%E5%B1%B1%E5%85%A8%E4%BD%93_qole97.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '島根県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452615/%E5%B3%B6%E6%A0%B9%E5%85%A8%E4%BD%93_okh8es.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '広島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452613/%E5%BA%83%E5%B3%B6%E5%85%A8%E4%BD%93_aasvlj.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '山口県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452614/%E5%B1%B1%E5%8F%A3%E5%85%A8%E4%BD%93_y8yhqc.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);

         
     DB::table('areas')->insert([
            'name' => '徳島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452615/%E5%BE%B3%E5%B3%B6%E5%85%A8%E4%BD%93_nc03cn.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
    
     DB::table('areas')->insert([
            'name' => '香川県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452614/%E9%A6%99%E5%B7%9D%E5%85%A8%E4%BD%93_mblfox.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '愛媛県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452616/%E6%84%9B%E5%AA%9B%E5%85%A8%E4%BD%93_gdwbo4.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '高知県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704452614/%E9%AB%98%E7%9F%A5%E5%85%A8%E4%BD%93_mwcby1.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '福岡県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454149/%E7%A6%8F%E5%B2%A1%E5%85%A8%E4%BD%93_dbflmv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '佐賀県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454146/%E4%BD%90%E8%B3%80%E5%85%A8%E4%BD%93_zvpjdc.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '長崎県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454148/%E9%95%B7%E5%B4%8E%E5%85%A8%E4%BD%93_wunntf.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '熊本県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454146/%E7%86%8A%E6%9C%AC%E5%85%A8%E4%BD%93_nirvkh.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '大分県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454147/%E5%A4%A7%E5%88%86%E5%85%A8%E4%BD%93_cclm7e.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '宮崎県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454145/%E5%AE%AE%E5%B4%8E%E5%85%A8%E4%BD%93_si7v6d.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '鹿児島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454146/%E9%B9%BF%E5%85%90%E5%B3%B6%E5%85%A8%E4%BD%93_qwacnn.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '沖縄県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704454149/%E6%B2%96%E7%B8%84%E5%85%A8%E4%BD%93_lk5tmw.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
    }
}
