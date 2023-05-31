<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'national_id' => '123456789',
            'username' => '123456789',
            'email' => 'admin@nursery.com',
            'password' => bcrypt('password'),
            'is_employee' => true,
        ]);
    }

}
