<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => \App\User::ADMIN,
            'status' => \App\User::ACTIVE,
        ]);
        \App\User::create([
            'name' => 'Việt farm',
            'email' => 'vietfarm@gmail.com',
            'password' => Hash::make('vietfarm123456'),
            'role' => \App\User::ADMIN,
            'status' => \App\User::ACTIVE,
        ]);
    }
}
