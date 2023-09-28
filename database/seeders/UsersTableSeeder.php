<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'username' => 'Rizal123',
                'password' => Hash::make('LaravelRizal21'),
                'name' => 'Rizal',
                'email' => 'rizal@gmail.com',
            ],
            [
                'username' => 'rona123',
                'password' => Hash::make('rona123'),
                'name' => 'Rona',
                'email' => 'rona@gmail.com',
            ],
            [
                'username' => 'rinaldi123',
                'password' => Hash::make('Rinaldi123'),
                'name' => 'Rinaldi',
                'email' => 'Rinaldi@gmail.com',
            ],
        ];

        // Insert data ke dalam tabel 'users'
        DB::table('users')->insert($users);
    }
}


