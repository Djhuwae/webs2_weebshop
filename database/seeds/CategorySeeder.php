<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Clothing',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Figures',
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Games',
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Keychains',
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Posters',
        ]);
    }
}
