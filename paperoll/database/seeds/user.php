<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->truncate();
         DB::table('users')->insert([
        	'name' => '1',
        	'email' =>'phu5554375@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
    }
}
