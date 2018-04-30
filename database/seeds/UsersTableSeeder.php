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
            'name' => 'Laura E. Halsel',
            'systemID' => 1,
            'email' => 'lhalsel@gmail.com',
            'imageFileName' => 'laura.jpg',
            'password' => bcrypt('test123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Miyuki Cuddlebugs',
            'systemID' => 2,
            'email' => 'miyuki@aol.com',
            'imageFileName' => 'dog.jpg',
            'password' => bcrypt('test123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
