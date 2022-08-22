<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * It populates the table with the default 
     * role-permission setup. Though, it can be
     * modified through the aplication by admin
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            [
                'id' => 1,
                'permission_id' => 1, //create user
                'role_id' => 1  //admin
            ],
            [
                'id' => 2,
                'permission_id' => 2,   //edit user
                'role_id' => 1  //admin
            ],
            [
                'id' => 3,
                'permission_id' => 3,   //delete user
                'role_id' => 1  //admin
            ],
            [
                'id' => 4,
                'permission_id' => 4,   //change roles
                'role_id' => 1  //admin
            ],
            [
                'id' => 5,
                'permission_id' => 5,   //change permissions
                'role_id' => 1  //admin
            ],
            [
                'id' => 6,
                'permission_id' => 1,   //create user
                'role_id' => 2  //editor
            ],
            [
                'id' => 7,
                'permission_id' => 2,   //edit user
                'role_id' => 2  //editor
            ],
            [
                'id' => 8,
                'permission_id' => 1,   //create user
                'role_id' => 3  //writer
            ],
        ]);
    }
}
