<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     
           
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
     
        DB::table('categories')->insert([
            [
            'id' => '1',
            'name' => '🌱',
            'created_at' => '2022-03-04 21:47:35 ',
            'updated_at' => 'NULL',
            ],
            [
            'id' => '2',
            'name' => '🌼',
            'created_at' => '2022-03-04 21:48:30  ',
            'updated_at' => 'NULL',
            ],
            [
            'id' => '3',
            'name' => '🌻',
            'created_at' => '2022-03-04 21:48:58  ',
            'updated_at' => 'NULL',
            ],
            [
            'id' => '4',
            'name' => '🌹',
            'created_at' => '2022-03-04 21:49:14 ',
            'updated_at' => 'NULL',
            ],
    ]);


    }
}
