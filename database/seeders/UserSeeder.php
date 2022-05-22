<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password')
        ]);
        User::factory()->create([
            'name' => 'PowerUser',
            'email' => 'pu@example.com',
            'password' => Hash::make('password')
        ]);
        User::factory()->create([
            'name' => 'GeneralUser',
            'email' => 'gu@example.com',
            'password' => Hash::make('password')
        ]);
    }
}
