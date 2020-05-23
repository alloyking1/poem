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
            'description' => Str::random(30).'@gmail.com',
        ]);
    }
}
