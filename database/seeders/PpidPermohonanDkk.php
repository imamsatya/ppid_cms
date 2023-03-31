<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpidPermohonanDkk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seederStatus();
        // $this->seederTemplateReject();
    }

    public function seederTemplateReject() {
        DB::table('template_reject')->insert([
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

    public function seederStatus() {
        DB::table('status')->insert(
            [
                // [
                //     'id' => 1,
                //     'name' => 'Permohonan Masuk'
                // ],
                // [
                //     'id' => 2,
                //     'name' => 'Proses'
                // ],
                // [
                //     'id' => 3,
                //     'name' => 'Proses (Disp)'
                // ],
                // [
                //     'id' => 4,
                //     'name' => 'Dijawab'
                // ],
                // [
                //     'id' => 5,
                //     'name' => 'Ditolak'
                // ],
                [
                    'id' => 6,
                    'name' => 'Tidak Diterima'
                ],
            ]
        );        
    }
}
