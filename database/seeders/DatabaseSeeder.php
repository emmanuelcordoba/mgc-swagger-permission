<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $user = User::create([
            'name' => 'Emmanuel Cordoba',
            'email' => 'emmanuelc27@gmail.com',
            'password' => Hash::make('123123'),
        ]);

        $role_admin = Role::create(['name' => 'admin']);
        $user->assignRole($role_admin);
    }
}
