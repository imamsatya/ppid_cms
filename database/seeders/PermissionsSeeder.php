<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
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
        //     DB::table('permissions')->insert([
        //         [
        //             'name' => 'create',
        //             'guard_name' => 'web',

        //         ],
        //         [
        //             'name' => 'read',
        //             'guard_name' => 'web',

        //         ],
        //         [
        //             'name' => 'update',
        //             'guard_name' => 'web',

        //         ], [
        //             'name' => 'delete',
        //             'guard_name' => 'web',

        //         ],
        //     ]);
        // }

        //Dashboard
        Permission::create(['name' => 'dashboard.*']);
        Permission::create(['name' => 'dashboard.create']);
        Permission::create(['name' => 'dashboard.read']);
        Permission::create(['name' => 'dashboard.update']);
        Permission::create(['name' => 'dashboard.delete']);

        //Layanan PPID
        Permission::create(['name' => 'layanan ppid.*']);
        Permission::create(['name' => 'layanan ppid.create']);
        Permission::create(['name' => 'layanan ppid.read']);
        Permission::create(['name' => 'layanan ppid.update']);
        Permission::create(['name' => 'layanan ppid.delete']);

        //Profil
        Permission::create(['name' => 'profil.*']);
        Permission::create(['name' => 'profil.create']);
        Permission::create(['name' => 'profil.read']);
        Permission::create(['name' => 'profil.update']);
        Permission::create(['name' => 'profil.delete']);

        //Regulasi
        Permission::create(['name' => 'regulasi.*']);
        Permission::create(['name' => 'regulasi.create']);
        Permission::create(['name' => 'regulasi.read']);
        Permission::create(['name' => 'regulasi.update']);
        Permission::create(['name' => 'regulasi.delete']);

        //Informasi Publik
        Permission::create(['name' => 'informasi publik.*']);
        Permission::create(['name' => 'informasi publik.create']);
        Permission::create(['name' => 'informasi publik.read']);
        Permission::create(['name' => 'informasi publik.update']);
        Permission::create(['name' => 'informasi publik.delete']);

        //Laporan
        Permission::create(['name' => 'laporan.*']);
        Permission::create(['name' => 'laporan.create']);
        Permission::create(['name' => 'laporan.read']);
        Permission::create(['name' => 'laporan.update']);
        Permission::create(['name' => 'laporan.delete']);

        //Standar Layanan
        Permission::create(['name' => 'standar layanan.*']);
        Permission::create(['name' => 'standar layanan.create']);
        Permission::create(['name' => 'standar layanan.read']);
        Permission::create(['name' => 'standar layanan.update']);
        Permission::create(['name' => 'standar layanan.delete']);

        //FAQ
        Permission::create(['name' => 'faq.*']);
        Permission::create(['name' => 'faq.create']);
        Permission::create(['name' => 'faq.read']);
        Permission::create(['name' => 'faq.update']);
        Permission::create(['name' => 'faq.delete']);

        //Manajemen Users
        Permission::create(['name' => 'manajemen users.*']);
        Permission::create(['name' => 'manajemen users.create']);
        Permission::create(['name' => 'manajemen users.read']);
        Permission::create(['name' => 'manajemen users.update']);
        Permission::create(['name' => 'manajemen users.delete']);
    }
}
