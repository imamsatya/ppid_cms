<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpidJenisIdentitasDanPemohon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedJenisIdentitas();
        $this->seedJenisPemohon();
    }

    public function seedJenisIdentitas() {
        DB::table('jenis_identitas')->insert([
            'id' => 1,
            'name' => 'KTP/NPWP'
        ]);

        DB::table('jenis_identitas')->insert([
            'id' => 2,
            'name' => 'Surat Kuasa'
        ]);

        DB::table('jenis_identitas')->insert([
            'id' => 3,
            'name' => 'Anggaran Dasar'
        ]);
    }

    public function seedJenisPemohon() {
        DB::table('jenis_pemohon')->insert([
            'id' => 1,
            'name' => 'Perorangan'
        ]);

        DB::table('jenis_pemohon')->insert([
            'id' => 2,
            'name' => 'Kelompok Orang'
        ]);

        DB::table('jenis_pemohon')->insert([
            'id' => 3,
            'name' => 'Badan Hukum'
        ]);
    }
}
