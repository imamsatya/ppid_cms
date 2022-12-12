<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriKeberatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategori_keberatan')->insert([
            'jenis_keberatan' => 'Permohonan Informasi Ditolak',
        ]);

        DB::table('kategori_keberatan')->insert([
            'jenis_keberatan' => 'Informasi Berkala Tidak Disediakan',
        ]);

        DB::table('kategori_keberatan')->insert([
            'jenis_keberatan' => 'Permintaan Informasi tidak Ditanggapi',
        ]);

        DB::table('kategori_keberatan')->insert([
            'jenis_keberatan' => 'Permintaan Informasi Ditanggapi tidak Sebagaimana yang Diminta',
        ]);

        DB::table('kategori_keberatan')->insert([
            'jenis_keberatan' => 'Permintaan Informasi tidak Dipenuhi',
        ]);

        DB::table('kategori_keberatan')->insert([
            'jenis_keberatan' => 'Biaya yang Dikenakan tidak Wajar',
        ]);

        DB::table('kategori_keberatan')->insert([
            'jenis_keberatan' => 'Informasi Disampaikan melebihi jangka waktu yang ditentukan',
        ]);
    }
}
