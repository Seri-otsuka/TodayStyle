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
        DB::table('users')->insert([
            'name' => 'テストユーザー',
            'email' => 'test@gmail',
            'password' => bcrypt('password'),
            'area_id' => '1',
            'temperature' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => null,
        ]);
        
      
        
    }
}
