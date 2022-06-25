<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'moh_id' =>Str::random(20),
            'first_name' => 'Muhammed',
            'last_name' => 'Rifkhan',
            'moh' => 'jaffna',
            'address' => '45,main road,kalmunai-5',
            'mobile' => '0758693562',
            'genter' => 'male',
            'email' => 'muhammedrifkhan@gmail.com',
            'password'=>Hash::make('123456789'),
            'role' => 'admin',
            'district' => 'jaffna',
            'DOB' => '1998-12-12',
            'user_name' => 'Rifkhan',
            'nic' => '785412963V',
        ]);
    }
}


