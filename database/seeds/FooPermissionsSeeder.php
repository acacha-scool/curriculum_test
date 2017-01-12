<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Class FooPermissionsSeeder
 */
class FooPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'browse foos']);
        Permission::create(['name' => 'read foos']);
        Permission::create(['name' => 'edit foos']);
        Permission::create(['name' => 'add foos']);
        Permission::create(['name' => 'delete foos']);
        Role::create(['name' => 'manage foos']);
    }
}
