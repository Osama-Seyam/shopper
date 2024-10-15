<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name'=>'admin',
        ]);

        Role::create([
            'name'=>'user',
        ]);

        User::create([
            'name'=>'osama',
            'email' => 'osama@admin.com',
            'password'=>Hash::make('123123123'),
            'role_id'=> 1,
        ]);

    }
}
