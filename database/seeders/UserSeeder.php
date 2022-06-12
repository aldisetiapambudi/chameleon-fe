<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'username' => 'testUsername',
            'email' => 'test@mail.com',
            'password' => Hash::make('test'),
            'token' => 'initoken',
            'status' => true,
            'is_reseller' => false,
        ]);
    }
}
