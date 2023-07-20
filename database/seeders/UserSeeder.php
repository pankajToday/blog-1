<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $admin =[
            'uid'=>1,
            'role_id' => '1',
            'first_name' => 'Pankaj',
            'last_name' => 'Kumar',
            'email' => 'admin@example.com',
            'password' => Hash::make('newPassword@98765'),
            'email_verified_at' => date('Y-m-d H:i'),
            'mobile' =>'90312'.rand(10000,99999),
            'user_img' => 'https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png',
            'status' => 1,
            'last_login' =>date('Y-m-d H:i') ,
        ];

       $adminUser =  User::create( $admin );
        $adminUser->uid = $adminUser->id.Carbon::now()->timestamp;
        $adminUser->save();



        for ($i=1 ;$i<= 100; $i++ )
        {
            $user =[
                'uid'=>1,
                'role_id' => 2,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName(),
                'email' => $faker->safeEmail,
                'password' => Hash::make('newPasswordFree@98765'),
                'email_verified_at' => date('Y-m-d H:i'),
                'mobile' =>'90312'.rand(10000,99999),
                'user_img' => 'https://www.pngitem.com/pimgs/m/581-5813504_avatar-dummy-png-transparent-png.png',
                'status' => 1,
                'last_login' =>date('Y-m-d H:i') ,
            ];
            $basicUser   = User::create( $user );

            $basicUser->uid = $basicUser->id.Carbon::now()->timestamp;
            $basicUser->save();
        }
    }
}
