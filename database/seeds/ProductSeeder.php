<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Products')->insert([
            'Name'        => 'Laptop1',
            'Description' => str_random( 250),
            'price'       => '1499',
            'category'    => '1',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop2',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name'        => 'Laptop3',
            'Description' => str_random( 250),
            'price'       => '1499',
            'category'    => '1',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop4',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop4',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '3',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop5',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '3',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop6',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '3',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop7',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop8',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop9',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '1',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop10',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '1',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop11',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '1',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop12',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '3',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop13',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop14',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop14',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop16',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop17',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop18',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop19',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
        DB::table('Products')->insert([
            'Name' => 'Laptop20',
            'Description' => str_random( 250),
            'price'       => '1000',
            'category'    => '2',
        ]);
    }
}
