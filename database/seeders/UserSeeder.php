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
            'name' => 'Calvin Jackson',
            'email' => 'mail@calvinjackson.me',
        ]);
        $admin->assignRole('Admin');
    }
}
