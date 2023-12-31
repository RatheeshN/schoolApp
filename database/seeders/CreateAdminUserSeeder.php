<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $user = User::create([
            'name' => 'Ratheesh', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    
        $role = Role::firstOrCreate(['name' => 'Admin','guard_name'=>'api']);
        Role::firstOrCreate(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole($role->name);
    }
}
