<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'name' => 'Director',
            'username' => 'director',
            'email' => 'director@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'director',
            'status' => 'active'
            
        ],

        [
            'name' => 'Manager',
            'username' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'manager',
            'status' => 'active'
        ],

        [
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'user',
            'status' => 'active'
        ],

        [
            'name' => 'Peter',
            'username' => 'user',
            'email' => 'peter@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'user',
            'status' => 'active'
        ],

        [
            'name' => 'Brenda',
            'username' => 'brenda',
            'email' => 'brenda@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'manager',
            'status' => 'active'
        ],
    
    ]);
    }
}
