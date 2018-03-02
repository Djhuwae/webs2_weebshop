<?php

use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            ['category_id' => 1,'id' => 1,'name' => 'T-shirts'],
            [
                'category_id' => 1,'id' => 2,'name' => 'Sweaters'
            ],

            [
                'category_id' => 2,'id' => 3,'name' => 'Action figures',
            ],

            [
                'category_id' => 2,'id' => 4,'name' => 'Robots',

            ],
            [
                'category_id' => 3,'id' => 5,'name' => 'Boardgames',

            ],
            [
                'category_id' => 3,'id' => 6,'name' => 'Videogames',

            ],
            [
                'category_id' => 4,'id' => 7,'name' => 'Naruto',

            ],
            [
                'category_id' => 4,'id' => 8,'name' => 'One Piece',

            ],
            [
                'category_id' => 5,'id' => 9,'name' => 'Naruto',

            ],
            [
                'category_id' => 5,'id' => 10, 'name' => 'One Piece',

            ]];
        DB::table('subcategories')->insert($subcategories);
    }
}
