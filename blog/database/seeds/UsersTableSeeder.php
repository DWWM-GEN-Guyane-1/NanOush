<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    // /**
    //  * Run the database seeds.
    //  *
    //  * @return void
    //  */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'nanoush',
            'email' => 'cimper.naima973@gmail.com',
            'password' => Hash::make('sokana'),
        ]);
    }
}