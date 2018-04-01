<?php
/**
 * Created by PhpStorm.
 * User: Donneh de beest
 * Date: 1-4-2018
 * Time: 22:41
 */

class UserSeeder
{

    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'email' => 'admin@admin',
            'password' => 'admin',
            'admin' => '1'
        ]);

    }
}