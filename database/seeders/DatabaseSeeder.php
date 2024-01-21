<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //ここにはuser
        //北海道の旭川にお住いのテストユーザー1さん暑がり
        DB::table('users')->insert([
            'name' => 'テストユーザー',
            'email' => 'test@gmail',
            'password' => bcrypt('password'),
            'temperature' => '0',
            'area_id' => '1',
            'finelyarea_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
      
        
    }
}
