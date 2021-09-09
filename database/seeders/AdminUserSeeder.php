<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'firstname' => 'ATCHADE', 
            'lastname' => 'B. Céphas', 
            'pays'=>'Benin',
            'pseudo'=>"8f256675-452d-45e1-b667-524d1731f332",
            'numTel'=>'45456452455',
            'email' => 'biocephas@yahoo.fr',
            'password' => bcrypt('@athcephbio@'),
            'provider_id'   => "DFGJHKvghggMKIHJB",
            'provider'      => "dafc_dedras",
           
        ]);
    
        $role = Role::create(['name' => 'SuperAdminA']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
