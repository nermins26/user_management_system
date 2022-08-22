<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * It populates the Permission table with
     * the all permissions which can 
     * some user obtain
     * IDs are important because of the pivot table
     * 
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [   
                'id' => 1,
                'code' => 'CU',
                'description' => 'Create user'
            ],
            [   
                'id' => 2,
                'code' => 'EU',
                'description' => 'Edit user'
            ],
            [   
                'id' => 3,
                'code' => 'DU',
                'description' => 'Delete user'
            ],
            [   
                'id' => 4,
                'code' => 'CR',
                'description' => 'Change role'
            ],
            [   
                'id' => 5,
                'code' => 'CP',
                'description' => 'Change permission'
            ]
        ]);
    }
}
