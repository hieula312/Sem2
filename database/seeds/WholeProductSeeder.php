<?php

use Illuminate\Database\Seeder;

class WholeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('whole_products')->insert([
            ['name'=>'StuffedAnimals'],
            ['name'=>'GiftBox'],
            ['name'=>'Keychains'],
            ['name'=>'Appliances'],
            ['name'=>'Souvenir'],
        ]);
    }
}