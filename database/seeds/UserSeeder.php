<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin' ,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'rights' => '1',
            'created_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'user1' ,
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1'),
            'rights' => '0',
            'created_at' => NOW(),
        ]);
    }
}
