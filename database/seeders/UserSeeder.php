<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@busk_x_earth.io',
        ]);
        $admin->assignRole('Admin');
    }
}
