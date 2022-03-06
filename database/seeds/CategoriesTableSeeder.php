<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'id' => 1,
            'name' => '🌱',
            'created_at' => now(),
            'updated_at' => NULL,
            ],
            [
            'id' => 2,
            'name' => '🌼',
            'created_at' => now(),
            'updated_at' => NULL,
            ],
            [
            'id' => 3,
            'name' => '🌻',
            'created_at' => now(),
            'updated_at' => NULL,
            ],
            [
            'id' => 4,
            'name' => '🌹',
            'created_at' => now(),
            'updated_at' => NULL,
            ],
    ]); //
    }
}
