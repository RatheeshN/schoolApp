<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'student-list',
            'student-create',
            'student-edit',
            'student-delete',
            'teacher-list',
            'teacher-create',
            'teacher-edit',
            'teacher-delete',
            'class-list',
            'class-create',
            'class-edit',
            'class-delete',
            'grade-list',
            'grade-create',
            'grade-edit',
            'grade-delete',
            'attendance-list',
            'attendance-create',
            'attendance-edit',
            'attendance-delete'
         ];
      
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission,'guard_name'=>'api']);
         }
    }
}
