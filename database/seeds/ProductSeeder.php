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
            'name' => 'One Piece T-shirt: Skull with map (woman)',
            'description' => 'Dit T-shirt van Otaku Selection is uitstekende kwaliteit en 100% katoen (190g/m2).',
            'quantity' => 50,
            'price' => 20.00,
            'categories_id' => 1,
        ]);
    }
}
