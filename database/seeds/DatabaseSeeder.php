<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
      
    $this->call([
        CategoriesTableSeeder::class,
        ]);


    }
}
