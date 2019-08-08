<?php

use Illuminate\Database\Seeder;

class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_products')->insert([
            ['id_whole' => 1, 'name' => 'Hot Product', 'abbreviation' => 'HP'],
            ['id_whole' => 1, 'name' => 'Teddy Bear', 'abbreviation' => 'TB'],
            ['id_whole' => 1, 'name' => 'Doraemon', 'abbreviation' => 'DR'],
            ['id_whole' => 1, 'name' => 'Pillow', 'abbreviation' => 'PL'],
            ['id_whole' => 2, 'name' => 'Box Of Gift', 'abbreviation' => 'BG'],
            ['id_whole' => 2, 'name' => 'Gift Bag', 'abbreviation' => 'GB'],
            ['id_whole' => 2, 'name' => 'Gift Card', 'abbreviation' => 'GC'],
            ['id_whole' => 3, 'name' => 'Strap Keychains', 'abbreviation' => 'SK'],
            ['id_whole' => 3, 'name' => 'Cute Keychains', 'abbreviation' => 'CK'],
            ['id_whole' => 3, 'name' => 'Keychains Squeeze', 'abbreviation' => 'KS'],
            ['id_whole' => 3, 'name' => 'Animal Keychains', 'abbreviation' => 'AK'],
            ['id_whole' => 4, 'name' => 'Water Bottle', 'abbreviation' => 'WB'],
            ['id_whole' => 4, 'name' => 'Essential Oil Lamp', 'abbreviation' => 'EL'],
            ['id_whole' => 4, 'name' => 'Mini Fan', 'abbreviation' => 'MF'],
            ['id_whole' => 4, 'name' => 'Household Appliances', 'abbreviation' => 'HA'],
            ['id_whole' => 4, 'name' => 'Glass Of Water', 'abbreviation' => 'GW'],
            ['id_whole' => 5, 'name' => 'Pig Tube', 'abbreviation' => 'PT'],
            ['id_whole' => 5, 'name' => 'Bowl Starfish', 'abbreviation' => 'BS'],
            ['id_whole' => 5, 'name' => 'Glass Globe', 'abbreviation' => 'GG'],
            ['id_whole' => 5, 'name' => 'Rose Wax', 'abbreviation' => 'RW'],
            ['id_whole' => 5, 'name' => 'Music Box', 'abbreviation' => 'MB']
        ]);
    }
}
