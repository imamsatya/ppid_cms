<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // {
        //     DB::table('roles')->insert([
        //         [
        //             'name' => 'admin',
        //             'guard_name' => 'web'
        //         ],
        //         [
        //             'name' => 'user',
        //             'guard_name' => 'web'
        //         ],

        //     ]);
        // }

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('manajemen users.*');

        $user = Role::create(['name' => 'user']);
        $user->givePermissionTo('profil.read');

        $super = Role::create(['name' => 'super']);
        $super->givePermissionTo('dashboard.*');
        $super->givePermissionTo('layanan ppid.*');
        $super->givePermissionTo('profil.*');
        $super->givePermissionTo('regulasi.*');
        $super->givePermissionTo('informasi publik.*');
        $super->givePermissionTo('laporan.*');
        $super->givePermissionTo('standar layanan.*');
        $super->givePermissionTo('faq.*');
        $super->givePermissionTo('manajemen users.*');
    }
}
