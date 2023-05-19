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
<<<<<<< HEAD
        User::updateOrInsert([
            'id' => 1,
            'username' => 'm.erwin',
        ],
        [
            'id' => 1,
            'username' => 'm.erwin',
            'email' => 'm.erwin@bumn.go.id',
            'handphone' =>  123456789,
            'name' => 'M Erwin',
        ]);
        User::updateOrInsert([
            'id' => 2,
            'username' => 'astry.nurul',
        ],
        [
            'id' => 2,
            'username' => 'astry.nurul',
            'email' => 'astry.nurul@bumn.go.id',
            'handphone' =>  123456789,
            'name' => 'Astry Nurul',
        ]);

        User::updateOrInsert([
            'id' => 3,
            'username' => 'shinta.dwijayati',
        ],
        [
            'id' => 3,
            'username' => 'shinta.dwijayati',
            'email' => 'shinta.dwijayati@bumn.go.id',
            'handphone' =>  123456789,
            'name' => 'Shinta Dwijayati',
        ]);
        User::updateOrInsert([
            'id' => 4,
            'username' => 'nurul.fadillah',
        ],
        [
            'id' => 4,
            'username' => 'nurul.fadillah',
            'email' => 'nurul.fadillah@bumn.go.id',
            'handphone' =>  123456789,
            'name' => 'Nurul Fadillah',
        ]);

        User::updateOrInsert([
            'id' => 5,
            'username' => 'admin.galih',
        ],
        [
            'id' => 5,
            'username' => 'admin.galih',
            'email' => 'admin.galih@bumn.go.id',
            'handphone' =>  123456789,
            'name' => 'Galih Prasetio',
        ]);

        User::updateOrInsert([
            'id' => 6,
            'username' => 'admin.adi',
        ],
        [
            'id' => 6,
            'username' => 'admin.adi',
            'email' => 'admin.adi@bumn.go.id',
            'handphone' =>  123456789,
            'name' => 'Mohamad Adi',
        ]);

        $admin = User::where('id',1)->first();
        $admin->assignRole('super');
        $admin = User::where('id',2)->first();
        $admin->assignRole('admin');
        $admin = User::where('id',3)->first();
        $admin->assignRole('admin');
        $admin = User::where('id',4)->first();
        $admin->assignRole('admin');
        $admin = User::where('id',5)->first();
        $admin->assignRole('super');
        $admin = User::where('id',6)->first();
        $admin->assignRole('super');
=======
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
>>>>>>> origin/main
    }
}
