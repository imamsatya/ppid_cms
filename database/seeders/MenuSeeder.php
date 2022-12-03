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
            'urutan' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Tentang PPID',
            'routing' => 'tentangppid.index',
            'urutan' => 1,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Tugas dan Fungsi',
            'routing' => 'tugasdanfungsi.index',
            'urutan' => 2,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Struktur PPID',
            'routing' => 'strukturppid.index',
            'urutan' => 3,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Visi dan Misi',
            'routing' => 'visimisi.index',
            'urutan' => 4,
            'main_menu_id' => 1,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Kontak',
            'routing' => 'kontak.index',
            'urutan' => 5,
            'main_menu_id' => 1,
        ]);

        //id 2
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Regulasi',
            'routing' => 'regulasi.index',
            'urutan' => 2,
        ]);

        //id 3
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Informasi Publik',
            'routing' => 'informasipublik.index',
            'urutan' => 3,
        ]);

        //id 4
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Standar Layanan',
            'routing' => null,
            'urutan' => 4,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Maklumat',
            'routing' => 'maklumat.index',
            'urutan' => 1,
            'main_menu_id' => 4,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Prosedur Layanan',
            'routing' => 'prosedurlayanan.index',
            'urutan' => 2,
            'main_menu_id' => 4,
        ]);

        DB::table('submenus')->insert([
            'nama_menu' => 'Biaya Layanan',
            'routing' => 'standarlayananbiaya.index',
            'urutan' => 3,
            'main_menu_id' => 4,
        ]);

        //id 5
        DB::table('mainmenus')->insert([
            'nama_menu' => 'Laporan',
            'routing' => 'laporan.index',
            'urutan' => 5,
        ]);

        //id 6
        DB::table('mainmenus')->insert([
            'nama_menu' => 'FAQ',
            'routing' => 'faq.index',
            'urutan' => 6,
        ]);
    }
}
