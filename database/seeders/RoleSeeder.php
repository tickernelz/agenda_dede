<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'kelola user']);
        Permission::create(['name' => 'kelola bagian']);
        Permission::create(['name' => 'kelola agenda']);
        Permission::create(['name' => 'melihat agenda']);

        $role1 = Role::create([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);
        $role1->givePermissionTo('kelola user');
        $role1->givePermissionTo('kelola bagian');
        $role1->givePermissionTo('kelola agenda');
        $role1->givePermissionTo('melihat agenda');

        $role2 = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);
        $role2->givePermissionTo('kelola bagian');
        $role2->givePermissionTo('kelola agenda');
        $role2->givePermissionTo('melihat agenda');

        $role3 = Role::create([
            'name' => 'Sekretariat',
            'guard_name' => 'web',
        ]);
        $role3->givePermissionTo('melihat agenda');

        $role4 = Role::create([
            'name' => 'Bid. Kesmas',
            'guard_name' => 'web',
        ]);
        $role4->givePermissionTo('melihat agenda');

        $role5 = Role::create([
            'name' => 'Bid. Yankes',
            'guard_name' => 'web',
        ]);
        $role5->givePermissionTo('melihat agenda');

        $role6 = Role::create([
            'name' => 'Bid. SDK',
            'guard_name' => 'web',
        ]);
        $role6->givePermissionTo('melihat agenda');

        $role7 = Role::create([
            'name' => 'Bid. P2',
            'guard_name' => 'web',
        ]);
        $role7->givePermissionTo('melihat agenda');
    }
}
