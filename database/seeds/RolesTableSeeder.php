<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['name' => 'Paizão', 'user_id' => 1]);

        $role = Role::create(['name' => 'Filhão', 'user_id' => 2]);

        $role = Role::create(['name' => 'Netão', 'user_id' => 15]);
    }
}
