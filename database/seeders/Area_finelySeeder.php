<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Area_finelySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //北海道
	    DB::table('areas_finely')->insert([
            'area_id' => '1',
            'name' => '旭川',
            'latitude' => '43.7578582199552',
            'longitude' => '142.370787287827',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '1',
            'name' => '網走',
            'latitude' => '44.0216882572457',
            'longitude' => '144.271755152275',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '1',
            'name' => '札幌',
            'latitude' => '43.0612648339292',
            'longitude' => '141.36132449529',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '1',
            'name' => '釧路',
            'latitude' => '42.9871150338281',
            'longitude' => '144.37990547343',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //青森
         DB::table('areas_finely')->insert([
            'area_id' => '2',
            'name' => '弘前',
            'latitude' => '40.6022023680465',
            'longitude' => '140.46222217133',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '2',
            'name' => '十和田',
            'latitude' => '40.6146996778523',
            'longitude' => '141.207240645666',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //岩手
        DB::table('areas_finely')->insert([
            'area_id' => '3',
            'name' => '盛岡',
            'latitude' => '39.7617047145004',
            'longitude' => '141.143034093514',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
          DB::table('areas_finely')->insert([
            'area_id' => '3',
            'name' => '遠野',
            'latitude' => '39.3721254277098',
            'longitude' => '141.5440350591',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //宮城
        DB::table('areas_finely')->insert([
            'area_id' => '4',
            'name' => '大崎',
            'latitude' => '38.5928862833691',
            'longitude' => '140.950411566631',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '4',
            'name' => '仙台',
            'latitude' => '38.2884491710499',
            'longitude' => '140.858956432117',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //秋田
        DB::table('areas_finely')->insert([
            'area_id' => '5',
            'name' => '北秋田',
            'latitude' => '40.2342730007531',
            'longitude' => '140.368211434911',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '5',
            'name' => '秋田',
            'latitude' => '39.7206602266328',
            'longitude' => '140.102753304179',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //山形
         DB::table('areas_finely')->insert([
            'area_id' => '6',
            'name' => '鶴岡',
            'latitude' => '38.7322996643998',
            'longitude' => '139.819858968851',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '6',
            'name' => '山形',
            'latitude' => '38.2788451257386',
            'longitude' => '140.352169501929',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //福島
         DB::table('areas_finely')->insert([
            'area_id' => '7',
            'name' => '会津若松',
            'latitude' => '37.5066916892161',
            'longitude' => '139.915959272313',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '7',
            'name' => '福島',
            'latitude' => '37.8111019577318',
            'longitude' => '140.503727810911',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //茨城
         DB::table('areas_finely')->insert([
            'area_id' => '8',
            'name' => '日立',
            'latitude' => '36.5953024056407',
            'longitude' => '140.649744241893',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '8',
            'name' => 'つくば',
            'latitude' => '36.1064305841394',
            'longitude' => '140.083948358943',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //栃木
        DB::table('areas_finely')->insert([
            'area_id' => '9',
            'name' => '那須塩原',
            'latitude' => '36.9776307080321',
            'longitude' => '140.049674970336',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '9',
            'name' => '宇都宮',
            'latitude' => '36.5706355274049',
            'longitude' => '139.841811787441',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //群馬
         DB::table('areas_finely')->insert([
            'area_id' => '10',
            'name' => '草津',
            'latitude' => '36.6175168465347',
            'longitude' => '138.575554836277',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '10',
            'name' => '桐生',
            'latitude' => '36.4104811455709',
            'longitude' => '139.332785333211',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //埼玉
        DB::table('areas_finely')->insert([
            'area_id' => '11',
            'name' => '秩父',
            'latitude' => '36.0018664192396',
            'longitude' => '139.094179689382',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '11',
            'name' => '川越',
            'latitude' => '35.9485208972768',
            'longitude' => '139.484194327144',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //千葉
         DB::table('areas_finely')->insert([
            'area_id' => '12',
            'name' => '成田',
            'latitude' => '35.7967502112973',
            'longitude' => '140.32290950978',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '12',
            'name' => '勝浦',
            'latitude' => '35.159312618083',
            'longitude' => '140.311923181956',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //東京
        DB::table('areas_finely')->insert([
            'area_id' => '13',
            'name' => '渋谷',
            'latitude' => '35.6655903995478',
            'longitude' => '139.708335717465',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '13',
            'name' => '葛飾',
            'latitude' => '35.7500934062549',
            'longitude' => '139.845757911527',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        //神奈川
        DB::table('areas_finely')->insert([
            'area_id' => '14',
            'name' => '箱根',
            'latitude' => '35.2330391192849',
            'longitude' => '139.107029732157',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '14',
            'name' => '横浜',
            'latitude' => '35.461461287325',
            'longitude' => '139.580694877721',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //新潟
        DB::table('areas_finely')->insert([
            'area_id' => '15',
            'name' => '新潟',
            'latitude' => '37.9136378643271',
            'longitude' => '139.043521856018',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '15',
            'name' => '柏崎',
            'latitude' => '37.3785892434795',
            'longitude' => '138.555045701261',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //富山
         DB::table('areas_finely')->insert([
            'area_id' => '16',
            'name' => '高岡',
            'latitude' => '36.7595125600078',
            'longitude' => '137.019274242656',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '16',
            'name' => '魚津',
            'latitude' => '36.8341614782466',
            'longitude' => '137.405757461174',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //石川
         DB::table('areas_finely')->insert([
            'area_id' => '17',
            'name' => '能登',
            'latitude' => '37.3119586652449',
            'longitude' => '137.152562323935',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '17',
            'name' => '金沢',
            'latitude' => '36.5666951359836',
            'longitude' => '136.656913811082',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //福井
         DB::table('areas_finely')->insert([
            'area_id' => '18',
            'name' => '福井',
            'latitude' => '36.0657060123763',
            'longitude' => '136.220521174451',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '18',
            'name' => '若狭',
            'latitude' => '35.5510577404354',
            'longitude' => '135.909067119202',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //山梨
        DB::table('areas_finely')->insert([
            'area_id' => '19',
            'name' => '甲府',
            'latitude' => '35.6675354892556',
            'longitude' => '138.566437202913',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '19',
            'name' => '成沢',
            'latitude' => '35.4841155319747',
            'longitude' => '138.714999479792',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //長野
        DB::table('areas_finely')->insert([
            'area_id' => '20',
            'name' => '長野',
            'latitude' => '36.651280099966',
            'longitude' => '138.193825048379',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '20',
            'name' => '箕輪',
            'latitude' => '35.9257700722696',
            'longitude' => '137.992235503602',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //岐阜
        DB::table('areas_finely')->insert([
            'area_id' => '21',
            'name' => '飛弾',
            'latitude' => '36.2544762646231',
            'longitude' => '137.183707612843',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        DB::table('areas_finely')->insert([
            'area_id' => '21',
            'name' => '岐阜',
            'latitude' => '35.444127804549',
            'longitude' => '136.777213483345',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //静岡
         DB::table('areas_finely')->insert([
            'area_id' => '22',
            'name' => '浜松',
            'latitude' => '34.7150883415941',
            'longitude' => '137.724062838346',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '22',
            'name' => '伊豆',
            'latitude' => '34.9812423016011',
            'longitude' => '138.937806262571',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //愛知 
         DB::table('areas_finely')->insert([
            'area_id' => '23',
            'name' => '名古屋',
            'latitude' => '35.1824187322868',
            'longitude' => '136.886178200259',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '23',
            'name' => '豊橋',
            'latitude' => '34.7983180090779',
            'longitude' => '137.380430657365',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //三重
         DB::table('areas_finely')->insert([
            'area_id' => '24',
            'name' => '津',
            'latitude' => '34.7240011649077',
            'longitude' => '136.505953531288',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '24',
            'name' => '志摩',
            'latitude' => '34.3352535075132',
            'longitude' => '136.828337592721',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //滋賀
         DB::table('areas_finely')->insert([
            'area_id' => '25',
            'name' => '彦根',
            'latitude' => '35.2806569236854',
            'longitude' => '136.256874792873',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '25',
            'name' => '甲賀',
            'latitude' => '34.9744139152594',
            'longitude' => '136.168713731197',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //京都
         DB::table('areas_finely')->insert([
            'area_id' => '26',
            'name' => '舞鶴',
            'latitude' => '35.4807600247331',
            'longitude' => '135.395748071835',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        
        
        //こっから長い緯度経度(経度緯度修正完了)こっから上も長い緯度経度になってます！
         DB::table('areas_finely')->insert([
            'area_id' => '26',
            'name' => '京都',
            'latitude' => '35.010887683689',
            'longitude' => '135.76900508511',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //大坂
         DB::table('areas_finely')->insert([
            'area_id' => '27',
            'name' => '大阪',
            'latitude' => '34.6936286324788',
            'longitude' => '135.511683332894',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
         DB::table('areas_finely')->insert([
            'area_id' => '27',
            'name' => '岸和田',
            'latitude' => '34.460904615399',
            'longitude' => '135.368312073253',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //兵庫
         DB::table('areas_finely')->insert([
            'area_id' => '28',
            'name' => '豊岡',
            'latitude' => '35.5694822620419',
            'longitude' => '134.822652956215',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '28',
            'name' => '神戸',
            'latitude' => '34.6856371538051',
            'longitude' => '135.203517961343',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '28',
            'name' => '淡路島',
            'latitude' => '34.4457750084863',
            'longitude' => '134.909393911913',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //奈良
         DB::table('areas_finely')->insert([
            'area_id' => '29',
            'name' => '奈良',
            'latitude' => '34.6946977882452',
            'longitude' => '135.792153251681',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '29',
            'name' => '十津川',
            'latitude' => '34.0097462502201',
            'longitude' => '135.787398717512',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //和歌山
         DB::table('areas_finely')->insert([
            'area_id' => '30',
            'name' => '和歌山',
            'latitude' => '34.2465990289868',
            'longitude' => '135.162877305491',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '30',
            'name' => '白浜',
            'latitude' => '33.6953761942361',
            'longitude' => '135.360631206328',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //鳥取
         DB::table('areas_finely')->insert([
            'area_id' => '31',
            'name' => '米子',
            'latitude' => '35.4436669687735',
            'longitude' => '133.326748178166',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '31',
            'name' => '鳥取',
            'latitude' => '35.5076224552858',
            'longitude' => '134.226528572422',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //岡山
         DB::table('areas_finely')->insert([
            'area_id' => '32',
            'name' => '倉敷',
            'latitude' => '34.595622350216',
            'longitude' => '133.775251601258',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '32',
            'name' => '津山',
            'latitude' => '35.0900809617981',
            'longitude' => '134.011976870373',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //島根
         DB::table('areas_finely')->insert([
            'area_id' => '33',
            'name' => '浜田',
            'latitude' => '34.9029531568414',
            'longitude' => '132.089032601568',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '33',
            'name' => '出雲',
            'latitude' => '35.3689853342864',
            'longitude' => '132.757272699645',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //広島
         DB::table('areas_finely')->insert([
            'area_id' => '34',
            'name' => '広島',
            'latitude' => '34.3837927888017',
            'longitude' => '132.458267619046',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '34',
            'name' => '福山',
            'latitude' => '34.4890844997994',
            'longitude' => '133.364126816847',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //山口
         DB::table('areas_finely')->insert([
            'area_id' => '35',
            'name' => '山口',
            'latitude' => '34.1795457206579',
            'longitude' => '131.475251291467',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '35',
            'name' => '柳井',
            'latitude' => '33.9678612840473',
            'longitude' => '132.107566535265',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //徳島
         DB::table('areas_finely')->insert([
            'area_id' => '36',
            'name' => '徳島',
            'latitude' => '34.0914594334807',
            'longitude' => '134.556770398797',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '36',
            'name' => '海陽',
            'latitude' => '33.6172837587247',
            'longitude' => '134.350904965818',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //香川
         DB::table('areas_finely')->insert([
            'area_id' => '37',
            'name' => '丸亀',
            'latitude' => '34.3043324746499',
            'longitude' => '133.810792828732',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '37',
            'name' => '高松',
            'latitude' => '34.3428937197499',
            'longitude' => '134.049745458909',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //愛媛
         DB::table('areas_finely')->insert([
            'area_id' => '38',
            'name' => '今治',
            'latitude' => '34.0594349991482',
            'longitude' => '133.01927989104',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '38',
            'name' => '大州',
            'latitude' => '33.5328586433423',
            'longitude' => '132.539140434838',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //高知
         DB::table('areas_finely')->insert([
            'area_id' => '39',
            'name' => '四万十',
            'latitude' => '32.9988847207455',
            'longitude' => '132.936385925515',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '39',
            'name' => '高知',
            'latitude' => '33.5771485762702',
            'longitude' => '133.51709448675',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //福岡
         DB::table('areas_finely')->insert([
            'area_id' => '40',
            'name' => '久留米',
            'latitude' => '33.3294827172369',
            'longitude' => '130.503677017658',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '40',
            'name' => '北九州',
            'latitude' => '33.8847427566909',
            'longitude' => '130.870783465751',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //佐賀
         DB::table('areas_finely')->insert([
            'area_id' => '41',
            'name' => '伊万里',
            'latitude' => '33.2747847957851',
            'longitude' => '129.878177258388',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '41',
            'name' => '佐賀',
            'latitude' => '33.2713403125854',
            'longitude' => '130.294284424732',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //長崎
         DB::table('areas_finely')->insert([
            'area_id' => '42',
            'name' => '佐世保',
            'latitude' => '33.1879191428657',
            'longitude' => '129.688585272171',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '42',
            'name' => '長崎',
            'latitude' => '32.7431765267569',
            'longitude' => '129.883592591052',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //熊本
         DB::table('areas_finely')->insert([
            'area_id' => '43',
            'name' => '熊本',
            'latitude' => '32.8035450094041',
            'longitude' => '130.710917769074',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '43',
            'name' => '水俣',
            'latitude' => '32.2188417940983',
            'longitude' => '130.411730555138',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //大分
         DB::table('areas_finely')->insert([
            'area_id' => '44',
            'name' => '日田',
            'latitude' => '33.3341829393266',
            'longitude' => '130.929807553138',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '44',
            'name' => '大分',
            'latitude' => '33.2469402062682',
            'longitude' => '131.597226968462',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //宮崎
         DB::table('areas_finely')->insert([
            'area_id' => '45',
            'name' => '延岡',
            'latitude' => '32.6156094339255',
            'longitude' => '131.687572787091',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '45',
            'name' => '宮崎',
            'latitude' => '31.9489942011634',
            'longitude' => '131.388485271253',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //鹿児島
         DB::table('areas_finely')->insert([
            'area_id' => '46',
            'name' => '鹿児島',
            'latitude' => '31.6112781286482',
            'longitude' => '130.549928843161',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '46',
            'name' => '肝付',
            'latitude' => '31.324201288417',
            'longitude' => '130.95830797182',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //沖縄
         DB::table('areas_finely')->insert([
            'area_id' => '47',
            'name' => '国頭',
            'latitude' => '26.7534175488664',
            'longitude' => '128.172252050634',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
         DB::table('areas_finely')->insert([
            'area_id' => '47',
            'name' => '那覇',
            'latitude' => '26.2079628026258',
            'longitude' => '127.676019179906',
            'path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
    }
}
