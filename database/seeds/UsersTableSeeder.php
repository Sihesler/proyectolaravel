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
        DB::table('users')->insert([
        	[
        		"name" => "sihesler",
        		"email" => "sihesler@gmail.com",
        		"password" => bcrypt('mateo123'),
        	]
        ]);
    }
}
