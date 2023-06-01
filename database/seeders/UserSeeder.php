<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin_role = Role::create(['name' => 'admin']);
        $parent_role = Role::create(['name' => 'parent']);
        $baby_sitter_role = Role::create(['name' => 'babysitter']);
        $accountant_role = Role::create(['name' => 'accountant']);

        $admin = User::factory()->create([
            'national_id' => '123456789',
            'username' => '123456789',
            'email' => 'admin@nursery.com',
            'is_employee' => true,
        ]);
        $admin->assignRole($admin_role);

        $parent = User::factory()->create([
            'email' => 'parent@nursery.com',
        ]);
        $parent->assignRole($parent_role);

        $babysitter = User::factory()->create([
            'email' => 'babysitter@nursery.com',
            'is_employee' => true
        ]);
        $babysitter->assignRole($baby_sitter_role);

        $accountant = User::factory()->create([
            'email' => 'accountant@nursery.com',
            'is_employee' => true
        ]);
        $accountant->assignRole($accountant_role);
    }

}
