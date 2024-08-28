<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Role::truncate(); 
        Role::firstOrCreate([ 
            'name' => 'admin',
            'guard_name' => 'api',
        ])->syncPermissions([ 
            'create profile'
        ]);

        Role::firstOrCreate([ 
            'name' => 'customer',
            'guard_name' => 'api',
        ])->syncPermissions(['create profile']);
    }
}
