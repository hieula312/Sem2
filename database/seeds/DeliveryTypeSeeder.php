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
            ['name'=>'Fast', 'abbr'=>'F', 'factor'=>1.2],
            ['name'=>'Normal', 'abbr'=>'N', 'factor'=>1],
            ['name'=>'Save', 'abbr'=>'S', 'factor'=>0.8],
        ]);
    }
}
