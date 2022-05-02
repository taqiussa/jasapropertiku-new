<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin'
        ]);
        Role::create([
            'name' => 'User'
        ]);
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@jasapropertiku.com',
            'password' => Hash::make('asdfasdf')
        ]);
        $admin->assignRole('Admin');
    }
}
