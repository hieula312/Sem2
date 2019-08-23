<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(WholeProductSeeder::class);
        $this->call(TypeProductSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SlideSeeder::class );
        $this->call(UserSeeder::class );
        $this->call(CitySeeder::class );
        $this->call(DistrictSeeder::class );
        $this->call(SubDistrictSeeder::class );
        $this->call(DeliveryTypeSeeder::class );
    }
}
