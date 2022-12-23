<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermohonanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seederPPIDMENDAPATKAN();
        $this->seederPPIDMEMBERIKAN();
        $this->seederJenisIdentitas();
        $this->seederJenisPemohon();
        $this->seederStatus();
        $this->seederTemplateReject();
    }

    public function seederPPIDMENDAPATKAN()
    {
        DB::table('ppid_mendapatkan')->insert([
            [
                'id' => 1,
                'name' => 'Melihat/Membaca/Mendengar/Mencatat'
            ],
            [
                'id' => 2,
                'name' => 'Salinan dalam bentuk Hardcopy'
            ],
            [
                'id' => 3,
                'name' => 'Salinan dalam bentuk Softcopy'
            ]

        ]);
    }

    public function seederPPIDMEMBERIKAN()
    {
        DB::table('ppid_memberikan')->insert([
            [
                'id' => 1,
                'name' => 'Mengambil Langsung'
            ],
            [
                'id' => 2,
                'name' => 'Dikirim lewat Pos'
            ],
            [
                'id' => 3,
                'name' => 'Email'
            ]
        ]);
    }

    public function seederJenisIdentitas()
    {
        DB::table('jenis_identitas')->insert([
            [
                'id' => 1,
                'name' => 'KTP/NPWP'
            ],
            [
                'id' => 2,
                'name' => 'Surat Kuasa'
            ],
            [
                'id' => 3,
                'name' => 'Anggaran Dasar'
            ]
        ]);
    }

    public function seederJenisPemohon()
    {
        DB::table('jenis_pemohon')->insert([
            [
                'id' => 1,
                'name' => 'Perorangan'
            ],
            [
                'id' => 2,
                'name' => 'Kelompok Orang'
            ],
            [
                'id' => 3,
                'name' => 'Badan Hukum'
            ]
        ]);
    }

    public function seederStatus()
    {
        DB::table('status')->insert([
            [
                'id' => 1,
                'name' => 'Permohonan Masuk'
            ],
            [
                'id' => 2,
                'name' => 'Dikonfirmasi'
            ],
            [
                'id' => 3,
                'name' => 'Diteruskan'
            ],
            [
                'id' => 4,
                'name' => 'Dijawab'
            ],
            [
                'id' => 5,
                'name' => 'Ditolak'
            ],
            [
                'id' => 6,
                'name' => 'Selesai'
            ]
        ]);
    }

    public function seederTemplateReject()
    {
        DB::table('status')->insert([
            [
                'id' => 1,
                'name' => 'Data tidak lengkap'
            ],
            [
                'id' => 2,
                'name' => 'File identitas tidak terbaca'
            ],
            [
                'id' => 3,
                'name' => 'Data tidak dikuasai PPID Kementrian BUMN'
            ],
        ]);
    }
}
