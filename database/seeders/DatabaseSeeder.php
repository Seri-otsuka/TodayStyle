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
            'name' => 'テストユーザー1',
            'email' => 'test1@gmail',
            'password' => bcrypt('password1'),
            'temperature' => '0',
            'area_id' => '1',
            'finelyarea_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
        //青森の弘前にお住まいのテストユーザー2さん寒がり
         DB::table('users')->insert([
            'name' => 'テストユーザー2',
            'email' => 'test2@gmail',
            'password' => bcrypt('password2'),
            'temperature' => '1',
            'area_id' => '2',
            'finelyarea_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
      
        
    }
}
