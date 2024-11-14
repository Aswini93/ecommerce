<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Dummy users
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password123'), // Use bcrypt to hash password
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name' => 'Sam Wilson',
            'email' => 'sam.wilson@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name' => 'Bob Brown',
            'email' => 'bob.brown@example.com',
            'password' => bcrypt('password123'),
        ]);
    }
}