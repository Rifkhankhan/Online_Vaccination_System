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
            'password'=>Hash::make('123456789'),
            'role' => 'admin',
            'district' => 'jaffna',
            'DOB' => '1998-12-12',
            'user_name' => 'Rifkhan',
            'nic' => '785412963V',
        ]);
    }
}


// $table->string('moh_id')->unique();
// $table->string('first_name');
// $table->string('last_name');
// $table->string('moh');
// $table->enum('genter',['male','female']);
// $table->number('mobile');
// $table->string('address');
// $table->string('district');
// $table->date('DOB');
// $table->string('user_name')->unique();
// $table->string('nic')->unique();
// $table->enum('role',['admin','moh','people']);
// $table->string('password');
