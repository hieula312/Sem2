<?php

use Illuminate\Database\Seeder;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subdistrict')->insert([
            ['id_district' => '1', 'name'=>'Sai Dong', 'shippingfee'=>4],
            ['id_district' => '1', 'name'=>'Viet Hung', 'shippingfee'=>3],
            ['id_district' => '2', 'name'=>'Le Dai Hanh', 'shippingfee'=>2],
            ['id_district' => '2', 'name'=>'Bach Khoa', 'shippingfee'=>2],
            ['id_district' => '3', 'name'=>'Dich Vong', 'shippingfee'=>1],
            ['id_district' => '3', 'name'=>'Nghia Do', 'shippingfee'=>1],
        ]);
    }
}
