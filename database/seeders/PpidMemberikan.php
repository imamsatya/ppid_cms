<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpidMemberikan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ppid_memberikan')->insert([
            'id' => 1,
            'name' => 'Mengambil Langsung'
        ]);

        DB::table('ppid_memberikan')->insert([
            'id' => 2,
            'name' => 'Dikirim lewat Pos'
        ]);

        DB::table('ppid_memberikan')->insert([
            'id' => 3,
            'name' => 'Email'
        ]);
    }
}
