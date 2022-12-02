<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PpidMendapatkan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ppid_mendapatkan')->insert([
            'id' => 1,
            'name' => 'Melihat/Membaca/Mendengar/Mencatat'
        ]);

        DB::table('ppid_mendapatkan')->insert([
            'id' => 2,
            'name' => 'Salinan dalam bentuk Hardcopy'
        ]);

        DB::table('ppid_mendapatkan')->insert([
            'id' => 3,
            'name' => 'Salinan dalam bentuk Softcopy'
        ]);
    }
}
