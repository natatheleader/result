<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Permission::truncate(); 
        $permissions = [ 
            [ 
                'name' => 'create profile',
            ]
        ];

        foreach($permissions as $permission)
        {
            Permission::firstOrCreate([
                'name' => $permission['name'],
                'guard_name' => 'api',
            ]);
        }
    }
}
