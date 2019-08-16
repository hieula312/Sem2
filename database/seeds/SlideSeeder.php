<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            ['name'=>'Shopping for gas station', 'priority' => 1, 'image' => 'slide001.png'],
            ['name'=>'Cute teddy bear', 'priority' => 0, 'image' => 'slide002.png'],
            ['name'=>'Learning while playing', 'priority' => 0, 'image' => 'slide003.png']
        ]);
    }
}
