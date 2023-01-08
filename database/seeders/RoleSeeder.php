<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $users =  [
            [
              'name' => 'Admin',
              
            ],
            [
              'name' => 'People',
              
            ],
          ];

          Role::insert($users);
    }
}
