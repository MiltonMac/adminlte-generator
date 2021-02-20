<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Facades\Hash;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_array = [];
        array_push($permissions_array, Permission::create(['name' => 'create_docentes']));
        array_push($permissions_array, Permission::create(['name' => 'edit_docentes']));
        
        $viewDocentesPermission = Permission::create(['name' => 'view_docentes']);
        array_push($permissions_array, $viewDocentesPermission);

        $superAdminRole = Role::create(['name' => 'super_admin']);
        $superAdminRole -> syncPermissions($permissions_array);

        $viewDocentesRole = Role::create(['name' => 'view_docentes']);
        $viewDocentesRole -> givePermissionTo($viewDocentesPermission);


        $userSuperAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin'),
        ]);

        $userSuperAdmin->assignRole('super_admin');   
        
    }
}
