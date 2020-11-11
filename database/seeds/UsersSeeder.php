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
        for ($i = 1; $i <= 20; $i++){
            \App\User::create([
                'name' => 'admin',
                'email' => $i.'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => \App\User::ADMIN,
                'status' => \App\User::ACTIVE,
            ]);
        }
       
    }
}
