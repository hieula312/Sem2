<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sex = ['M','F'];
        for($i = 1; $i <= 10;$i++)
        {
            if($i < 2){
                $level = 3;
            }else{
                $level = rand(1, 2);
            }
            DB::table('users')->insert(
                [
                    'name' => 'user_'.$i,
                    'email' => 'user_'.$i.'@mymail.com',
                    'password' => bcrypt('123456'),
                    'level'=> $level,
                    'phoneNumber'=> '09'.getRandomStringNumber(8),
                    'sex'=> $sex[rand(0,1)],
                ]
            );
        }
    }
}
