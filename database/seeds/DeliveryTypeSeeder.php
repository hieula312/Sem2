<?php

use Illuminate\Database\Seeder;

class DeliveryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliverytype')->insert([
            ['name'=>'Fast', 'abbr'=>'F', 'price'=>1.2],
            ['name'=>'Normal', 'abbr'=>'N', 'price'=>1],
            ['name'=>'Save', 'abbr'=>'S', 'price'=>0.8],
        ]);
    }
}
