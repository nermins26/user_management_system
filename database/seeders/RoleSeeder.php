<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * It populates the table by the default roles
     * that can be assigned to a user. One user can
     * have one role, but one role
     * can have multiple permissions.
     * IDs are important because of the pivot table
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'administrator'],
            ['id' => 2, 'name' => 'editor'],
            ['id' => 3, 'name' => 'writer'],
        ]);
    }
}
