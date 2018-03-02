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
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'Goku supreme sweatshirt',
            'description' => 'Black Kid Goku Bape & Supreme Mix Sweatshirt',
            'quantity' => 50,
            'price' => 39.99,
            'imageurl' =>'https://detectiveshirts.com/photos/goku-supreme-sweatshirt.jpg',
            'categories_id' => 1,
        ]);
    }
}
