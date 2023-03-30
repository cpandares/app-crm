<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $adminRole =  Role::create(['name'=>'Soporte']);
       $directiveRole = Role::create(['name'=>'Directivo']);
       $comercialRole = Role::create(['name'=>'Comercial']);
       $empleadoRole = Role::create(['name'=>'Empleado']);

       Permission::create(['name' => 'admin.home', 'description'=>'Rol de Soporte'])->syncRoles([$adminRole,$directiveRole]);


       Permission::create(['name' => 'admin.users.index','description'=>'See All Users'])->syncRoles([$adminRole]);
       Permission::create(['name' => 'admin.users.edit','description'=>'Edit Users'])->syncRoles([$adminRole]);
       Permission::create(['name' => 'admin.users.update','description'=>'Asign role'])->syncRoles([$adminRole]);

        


        Permission::create(['name' => 'admin.categories.index','description'=>'See Categories'])->syncRoles([$adminRole,$directiveRole]);
        Permission::create(['name' => 'admin.categories.create','description'=>'Create Categories'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.categories.edit','description'=>'Edit Category'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.categories.destroy','description'=>'Delete Category'])->syncRoles([$adminRole]);

        
        Permission::create(['name' => 'admin.tags.index','description'=>'See Tags'])->syncRoles([$adminRole,$directiveRole]);
        Permission::create(['name' => 'admin.tags.create','description'=>'Create Tag'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.tags.edit','description'=>'Edit Tag'])->syncRoles([$adminRole]);
        Permission::create(['name' => 'admin.tags.destroy','description'=>'Delete Tag'])->syncRoles([$adminRole]);
        

        Permission::create(['name' => 'admin.post.index','description'=>'See Posts'])->syncRoles([$adminRole,$directiveRole]);
        Permission::create(['name' => 'admin.post.create','description'=>'Create Post'])->syncRoles([$adminRole,$directiveRole]);
        Permission::create(['name' => 'admin.post.edit','description'=>'Edit Post'])->syncRoles([$adminRole,$directiveRole]);
        Permission::create(['name' => 'admin.post.destroy','description'=>'Delete Post'])->syncRoles([$adminRole,$directiveRole]);
    }
}
