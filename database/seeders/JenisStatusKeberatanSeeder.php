<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisStatusKeberatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jenis_status_keberatan')->insert([
            'status' => 'Belum Dikonfirmasi',
        ]);

        DB::table('jenis_status_keberatan')->insert([
            'status' => 'Proses',
        ]);

        DB::table('jenis_status_keberatan')->insert([
            'status' => 'Selesai',
        ]);
    }
}
