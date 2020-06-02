<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::created(['name'=>'admin']);
        Role::created(['name'=>'author']);
        Role::created(['name'=>'user']);

    }
}
