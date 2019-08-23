<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('district')->insert([
            ['id_city' => '1', 'name'=>'Long Bien'],
            ['id_city' => '1', 'name'=>'Hai Ba Trung'],
            ['id_city' => '1', 'name'=>'Cau Giay'],
        ]);
    }
}
