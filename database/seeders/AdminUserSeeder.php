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
            'firstname' => 'SCHALLOM', 
            'lastname' => 'AW', 
            'pays'=>'Benin',
            'pseudo'=>"zdrgfhjjd1731f-3328f256675-452d-45e1-b667-",
            'numTel'=>'89685763',
            'email' => 'schal97.aw@gmail.com',
            'password' => bcrypt('schallom'),//@athcephbio@
            'provider_id'   => "DFwwwjdznJHKvghggMKIHJB",
            'provider'      => "dafc_dedras",
           
        ]);
    
        $role = Role::create(['name' => 'SupAdmin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
