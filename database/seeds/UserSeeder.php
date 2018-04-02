<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Donneh de beest
 * Date: 1-4-2018
 * Time: 22:41
 */

class UserSeeder extends Seeder
{

    public function run()
    {

        $users=[
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.nl',
                'password' => 'admin',
                'admin' => 1,
            ],
            [
                'id' => 2,
                'name' => 'donnie',
                'email' => 'donnie@donnie.nl',
                'passowrd' => 'donnie',
                'admin' => 0
            ],
            ];
        DB::table('users')->insert($users);

    }
}