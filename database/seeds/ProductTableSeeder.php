<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10).'@gmail.com',
            'price' => int::random(10),
            'cathegory' => App/Cathegory::all(),
            'password' => bcrypt('password'),
        ]);
    }
}
