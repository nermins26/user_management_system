<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the database with some basic
     * users just for testing
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'Korisnik',
                'user_name' => 'admin123',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('test2022.-'), 
                'status' => 1 
                // administrator
            ],
            [
                'first_name' => 'Editor',
                'last_name' => 'Korisnik',
                'user_name' => 'editor123',
                'email' => 'editor@gmail.com',
                'password' => Hash::make('test2022.-'), 
                'status' => 2 
                // editor
            ],
            [
                'first_name' => 'Writer',
                'last_name' => 'Korisnik',
                'user_name' => 'writer123',
                'email' => 'writer@gmail.com',
                'password' => Hash::make('test2022.-'), 
                'status' => 3 
                // writer
            ]
        ]);
    }
}
