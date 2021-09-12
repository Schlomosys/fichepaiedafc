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
            'firstname' => 'SCHAL', 
            'lastname' => 'OM', 
            'pays'=>'Benin',
            'pseudo'=>"524d1731f-3328f256675-452d-45e1-b667-",
            'numTel'=>'8525645785',
            'email' => 'schal97.aw@gmail.com',
            'password' => bcrypt('schallom'),//@athcephbio@
            'provider_id'   => "DFGsjsjdznJHKvghggMKIHJB",
            'provider'      => "dafc_dedras",
           
        ]);
    
        $role = Role::create(['name' => 'LordAdmin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
