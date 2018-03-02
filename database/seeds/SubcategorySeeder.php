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
            ['categories_id' => 1,'id' => 1,'name' => 'T-shirts'],
            [
                'categories_id' => 1,'id' => 2,'name' => 'Sweaters'
            ],

            [
                'categories_id' => 2,'id' => 3,'name' => 'Action figures',
            ],

            [
                'categories_id' => 2,'id' => 4,'name' => 'Robots',

            ],
            [
                'categories_id' => 3,'id' => 5,'name' => 'Boardgames',

            ],
            [
                'categories_id' => 3,'id' => 6,'name' => 'Videogames',

            ],
            [
                'categories_id' => 4,'id' => 7,'name' => 'Naruto',

            ],
            [
                'categories_id' => 4,'id' => 8,'name' => 'One Piece',

            ],
            [
                'categories_id' => 5,'id' => 9,'name' => 'Naruto',

            ],
            [
                'categories_id' => 5,'id' => 10, 'name' => 'One Piece',

            ]];
        DB::table('subcategories')->insert($subcategories);
    }
}
