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
            'name' => 'Kim',
            'email' => 'KimonthyH.@gmail.com',
            'imageFileName' => 'kim.png',
            'password' => bcrypt('kim'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mulch black',
            'email' => 'MuclchBlack@yahoo.com',
            'imageFileName' => 'mulchblack.png',
            'password' => bcrypt('mulch'),
        ]);
    }
}
