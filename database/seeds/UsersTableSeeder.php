<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<50; $i++){
            DB::table('users')->insert([
                'firstname' => str_random(15),
                'lastname' => str_random(15),
                'email' => str_random(10).'@gmail.com',
                'ncin' => mt_rand(0000000,99999999),
                'phone' => mt_rand(0000000,99999999),
                'password' => bcrypt('123456'),
                'userPrivilege' => 1,
            ]);
        }        
    }
}
