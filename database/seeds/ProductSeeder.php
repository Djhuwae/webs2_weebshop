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
                'price' => 39.99,
                'imageurl' =>'https://detectiveshirts.com/photos/goku-supreme-sweatshirt.jpg',
                'categories_id' => 1,
                'subcategories_id' => 2,
            ],
            [
                'id' => 2,
                'name' => 'BANPRESTO Dragon Ball Z: Trunks',
                'description' => 'Voor iedereen die Trunks tof vindt, is er nu de Banpresto Trunks-figurine met speciale inkleuring waardoor het lijkt alsof hij zo uit de manga en anime is gestapt.',
                'price' => 79.99,
                'imageurl' =>'http://picscdn.redblue.de/doi/pixelboxx-mss-74722582/fee_786_587_png/BANPRESTO-Dragon-Ball-Z%3A-Trunks',
                'categories_id' => 2,
                'subcategories_id' => 3,
            ],
            [
                'id' => 3,
                'name' => 'Dragon Ball Z - Budokai Tenkaichi 3 (Platinum Edition)',
                'description' =>'In Dragon Ball Z- Budokai Tenkaichi 3 kunnen spelers aan de slag met 161 verschillende personages die allemaal afkomstig zijn uit de Dragon Ball Z animatieserie.',
                'price' => 78.00,
                'imageurl' =>'https://s.s-bol.com/imgbase0/imagebase3/large/FC/4/3/3/3/1004004005533334.jpg',
                'categories_id' => 3,
                'subcategories_id' => 6,
            ],
            [
                'id' => 4,
                'name' => 'DRAGON BALL - Metal Keychain - DBZ/Dragon Ball',
                'description' => 'DRAGON BALL - Metal Keychain - DBZ/Dragon Ball',
                'price' => 8.49,
                'imageurl' =>'https://cdn.shopify.com/s/files/1/0643/2323/products/1pc-Dragon-Ball-Z-New-In-Bag-7-Stars-Crystal-Balls-Keychain-Pendant-Complete-set-2_96b83c1d-2ca0-4119-ab00-fd34bdd9d8c5.jpeg?v=1464337803',
                'categories_id' => 4,
                'subcategories_id' => 8,
            ],
            [
                'id' => 5,
                'name' => 'Fairy Tail Posters - A3 Design',
                'description' => 'These Fairy Tail posters would spice up the room of any anime lover! As a package of 8, these posters are great value and perfect as gifts for friends!',
                'price' => 17.95,
                'imageurl' =>'https://cdn.shopify.com/s/files/1/1282/4381/products/product-image_3fe4a7ae-27e9-4481-98e9-d4a20f27886a_large.jpg?v=1463509830',
                'categories_id' => 5,
                'subcategories_id' => 9,
            ],
            [
                'id' => 6,
                'name' => 'Supreme Goku - T-Shirt',
                'description' => '100% combed ringspun cotton',
                'price' => 20,
                'imageurl' =>'https://ddteeshirt.com/wp-content/uploads/2017/10/supreme-goku-shirt-sweat-youth-shirt.jpg',
                'categories_id' => 1,
                'subcategories_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Super Saiyan Goku Action Figure',
                'description' => 'Own this awesome action figure of Goku as a Super Saiyan.',
                'price' => 21,
                'imageurl' =>'https://cdn.shopify.com/s/files/1/0956/5498/products/accessory-dragon-ball-z-super-saiyan-goku-action-figure-1.jpg?v=1450719756',
                'categories_id' => 2,
                'subcategories_id' => 4,
            ],
            [
                'id' => 8,
                'name' => 'Sailor Moon Crystal: Dice Challenge',
                'description' => 'You and an opponent use your selected characters to battle each other in several rounds of combat.',
                'price' => 30,
                'imageurl' =>'https://cdn.animenewsnetwork.com/thumbnails/max1000x1500/cms/news/115354/dicechallenge.png.jpg',
                'categories_id' => 3,
                'subcategories_id' => 5,
            ],
            [
                'id' => 9,
                'name' => 'Naruto Uzumaki - Rubber - Sleutelhanger',
                'description' => 'Naruto sleutelhanger jeej',
                'price' => 9.95,
                'imageurl' =>'https://s.s-bol.com/imgbase0/imagebase3/large/FC/1/4/0/6/9200000087966041.jpg',
                'categories_id' => 4,
                'subcategories_id' => 7,
            ],
            [
                'id' => 10,
                'name' => 'ONE PIECE - Poster',
                'description' => 'Wanted Luffy',
                'price' => 20.99,
                'imageurl' =>'https://images-na.ssl-images-amazon.com/images/I/51b-P9FXhOL.jpg',
                'categories_id' => 5,
                'subcategories_id' => 10,
            ],
            ];
        DB::table('products')->insert($products);
    }
}
