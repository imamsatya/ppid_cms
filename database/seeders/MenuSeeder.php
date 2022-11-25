<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id 1
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Dashboard',
            'routing' => null,
            'nama_permission' => 'dashboard.view',
            'urutan' => 1,
        ]);

        //id 2
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Profil',
            'routing' => null,
            'nama_permission' => null,
            'urutan' => 2,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Profil Singkat PPID',
            'routing' => 'admin.profilsingkat.index',
            'nama_permission' => 'profil singkat ppid.view',
            'urutan' => 1,
            'main_menu_id' => 2,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Tugas dan Fungsi',
            'routing' => 'admin.tugasdanfungsi.index',
            'nama_permission' => 'tugas dan fungsi ppid.view',
            'urutan' => 2,
            'main_menu_id' => 2,
        ]);

        //id 3
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Regulasi',
            'routing' => null,
            'nama_permission' => null,
            'urutan' => 3,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Peraturan KIP',
            'routing' => 'admin.peraturan_kip.index',
            'nama_permission' => 'peraturan kip.view',
            'urutan' => 1,
            'main_menu_id' => 3,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Rancangan Peraturan KIP',
            'routing' => 'admin.rancangan_peraturan_kip.index',
            'nama_permission' => 'rancangan peraturan kip.view',
            'urutan' => 2,
            'main_menu_id' => 3,
        ]);
    }
}
