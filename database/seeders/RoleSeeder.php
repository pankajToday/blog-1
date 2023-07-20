<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataItems =['Admin' ,'User','Editor'];

        foreach ( $dataItems as  $data )
        {
            Role::create([
                'name' => $data
            ]);
        }
    }
}
