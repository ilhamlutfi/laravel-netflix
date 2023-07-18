<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Ilham Lutfi',
            'email' => 'ilhamlutfi153@gmail.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole('admin');
    }
}
