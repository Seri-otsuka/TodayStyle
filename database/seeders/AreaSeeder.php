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
        
         DB::table('areas')->insert([
            'name' => '北海道',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1704285180/%E7%84%A1%E9%A1%8C18_20231231162348_ebavhj.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
    
	//都道府県の番号変更待ち
	 DB::table('areas')->insert([
            'name' => '青森県',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '岩手県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703860718/iwate_zuf1zk.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '宮城県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703860719/miyagi_luiday.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '秋田県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703860720/akita_gpji4m.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
       
	DB::table('areas')->insert([
            'name' => '山形県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703860719/yamagata_hcreew.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '福島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703860718/hukuoka_y3hgv0.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '茨城県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896602/ibaraki_kh9dps.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);

	DB::table('areas')->insert([
            'name' => '栃木県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896600/totigi_enixdo.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
    DB::table('areas')->insert([
            'name' => '群馬県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896602/gunma_qnnevz.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '埼玉県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896599/saitama_zo3kur.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '千葉県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896600/tiba_vecoqm.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '東京都',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896601/toukyou_mlbmhd.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '神奈川県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896599/kanagawa_lvn51k.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '新潟県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896794/niigata_b6ojey.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
    DB::table('areas')->insert([
            'name' => '富山県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896796/toyama_ipmyfe.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '石川県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896793/ishikawa_dcp9yd.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '福井県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896792/hukui_jeap13.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '山梨県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896797/yamanashi_pwehak.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '長野県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896794/nagano_ywpdkm.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '岐阜県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703860718/gihu_vatxvi.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '静岡県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896795/sizuoka_xgfsjh.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '愛知県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896798/aiti_mfrxjj.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '三重県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896976/mie_uulerr.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
    //とりあえず琵琶湖なしver.
     DB::table('areas')->insert([
            'name' => '滋賀県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896979/siga_mhbuo2.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '京都県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896983/kyouto_ajlxsg.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '大阪府',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896978/oosaka_filkhv.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '兵庫県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896981/hyougo_qz07cf.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '奈良県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896977/nara_j5xsrz.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '和歌山県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703896980/wakayama_kpxdxj.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '鳥取県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897377/tottori_j6pkbu.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '岡山県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897381/okayama_gemwmo.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '島根県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897377/simane_efbhi0.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '広島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897379/hirosima_syerxj.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '山口県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897378/yamaguti_rw72cu.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);

         
     DB::table('areas')->insert([
            'name' => '徳島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897616/tokusima_mgyzto.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
    
     DB::table('areas')->insert([
            'name' => '香川県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897619/kagawa_skeyc5.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '愛媛県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897618/ehime_hfon1z.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '高知県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897615/kouti_wi2rvu.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '福岡県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897738/hukuoka_k21zo2.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '佐賀県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897737/saga_ltsdp0.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '長崎県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897732/nagasaki_lmnttc.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '熊本県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897729/kumamoto_smhxlm.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '大分県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897735/ooita_l3hiim.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '宮崎県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897730/miyazaki_lrx81v.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '鹿児島県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897740/kagosima_u6ul0i.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
         
     DB::table('areas')->insert([
            'name' => '沖縄県',
            'path' => 'https://res.cloudinary.com/dlfimibcq/image/upload/v1703897734/okinawa_q9thni.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
         ]);
    }
}
