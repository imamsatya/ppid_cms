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
            'nama_menu' => 'Profil',
            'routing' => null,
            'is_active' => true,
            'urutan' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Tentang PPID',
            'routing' => 'tentangppid.index',
            'is_active' => true,
            'urutan' => 1,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Tugas dan Fungsi',
            'routing' => 'tugasdanfungsi.index',
            'is_active' => true,
            'urutan' => 2,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Struktur PPID',
            'routing' => 'strukturppid.index',
            'is_active' => true,
            'urutan' => 3,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Visi dan Misi',
            'routing' => 'visimisi.index',
            'is_active' => true,
            'urutan' => 4,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Kontak',
            'routing' => 'kontak.index',
            'is_active' => true,
            'urutan' => 5,
            'main_menu_id' => 1,
        ]);

        //id 2
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Regulasi',
            'routing' => 'regulasi.index',
            'is_active' => true,
            'urutan' => 2,
        ]);

        //id 3
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Informasi Publik',
            'routing' => 'informasipublik.index',
            'is_active' => true,
            'urutan' => 3,
        ]);

        //id 4
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Standar Layanan',
            'routing' => null,
            'is_active' => true,
            'urutan' => 4,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Maklumat',
            'routing' => 'maklumat.index',
            'is_active' => true,
            'urutan' => 1,
            'main_menu_id' => 4,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Prosedur Layanan',
            'routing' => 'prosedurlayanan.index',
            'is_active' => true,
            'urutan' => 2,
            'main_menu_id' => 4,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Biaya Layanan',
            'routing' => 'standarlayananbiaya.index',
            'is_active' => true,
            'urutan' => 3,
            'main_menu_id' => 4,
        ]);

        //id 5
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Laporan',
            'routing' => 'laporan.index',
            'is_active' => true,
            'urutan' => 5,
        ]);

        //id 6
        DB::table('mainmenus')->insert([
            'nama_menu' => 'FAQ',
            'routing' => 'faq.index',
            'is_active' => true,
            'urutan' => 6,
        ]);
    }
}
