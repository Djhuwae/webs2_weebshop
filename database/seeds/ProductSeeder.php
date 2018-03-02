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
        $products=[
            [
                'id' => 1,
                'name' => 'Goku supreme sweatshirt',
                'description' => 'Black Kid Goku Bape & Supreme Mix Sweatshirt',
                'quantity' => 50,
                'price' => 39.99,
                'imageurl' =>'https://detectiveshirts.com/photos/goku-supreme-sweatshirt.jpg',
                'categories_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'BANPRESTO Dragon Ball Z: Trunks',
                'description' => 'Voor iedereen die Trunks tof vindt, is er nu de Banpresto Trunks-figurine met speciale inkleuring waardoor het lijkt alsof hij zo uit de manga en anime is gestapt.',
                'quantity' => 50,
                'price' => 79.99,
                'imageurl' =>'https://detectiveshirts.com/photos/goku-supreme-sweatshirt.jpg',
                'categories_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Dragon Ball Z - Budokai Tenkaichi 3 (Platinum Edition)',
                'description' =>'In Dragon Ball Z- Budokai Tenkaichi 3 kunnen spelers aan de slag met 161 verschillende personages die allemaal afkomstig zijn uit de Dragon Ball Z animatieserie.',
                'quantity' => 3,
                'price' => 78.00,
                'imageurl' =>'https://s.s-bol.com/imgbase0/imagebase3/large/FC/4/3/3/3/1004004005533334.jpg',
                'categories_id' => 3,
            ],
            [
                'id' => 4,
                'name' => 'DRAGON BALL - Metal Keychain - DBZ/Dragon Ball',
                'description' => 'DRAGON BALL - Metal Keychain - DBZ/Dragon Ball',
                'quantity' => 50,
                'price' => 8.49,
                'imageurl' =>'https://s.s-bol.com/imgbase0/imagebase3/large/FC/9/0/1/7/9200000045977109.jpg',
                'categories_id' => 4,
            ],
            [
                'id' => 5,
                'name' => 'Fairy Tail Posters - A3 Design',
                'description' => 'These Fairy Tail posters would spice up the room of any anime lover! As a package of 8, these posters are great value and perfect as gifts for friends!',
                'quantity' => 50,
                'price' => 17.95,
                'imageurl' =>'https://cdn.shopify.com/s/files/1/1282/4381/products/product-image_3fe4a7ae-27e9-4481-98e9-d4a20f27886a_large.jpg?v=1463509830',
                'categories_id' => 5,
            ],
            ];
        DB::table('products')->insert($products);
    }
}
