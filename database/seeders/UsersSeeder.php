<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('12341234'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@role.test',
            'password' => bcrypt('12341234'),
        ]);
        $user->assignRole('user');

        $super = User::create([
            'name' => 'Super Role',
            'email' => 'super@role.test',
            'password' => bcrypt('12341234'),
        ]);
        $super->assignRole('super');
    }
}
