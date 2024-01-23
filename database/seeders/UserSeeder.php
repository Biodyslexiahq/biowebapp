<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin= User::create([
            'name'=> 'Biowebadmin@hq',
            'email'=> 'biodyslexiahq@gmail.com',
            'password'=> bcrypt('City@technologies.com'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name'=> 'User',
            'email'=> 'test@gmail.com',
            'password'=> bcrypt('test1999'),
        ]);

        $user->assignRole('client');
    }
}
