<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // {
        //     DB::table('permissions')->insert([
        //         [
        //             'name' => 'create',
        //             'guard_name' => 'web',

        //         ],
        //         [
        //             'name' => 'view',
        //             'guard_name' => 'web',

        //         ],
        //         [
        //             'name' => 'edit',
        //             'guard_name' => 'web',

        //         ], [
        //             'name' => 'delete',
        //             'guard_name' => 'web',

        //         ],
        //     ]);
        // }

        //Dashboard
        Permission::create(['name' => 'dashboard.create']);
        Permission::create(['name' => 'dashboard.view']);
        Permission::create(['name' => 'dashboard.edit']);
        Permission::create(['name' => 'dashboard.delete']);

        //Layanan PPID
        //Data Permohonan
        Permission::create(['name' => 'data permohonan.create']);
        Permission::create(['name' => 'data permohonan.view']);
        Permission::create(['name' => 'data permohonan.edit']);
        Permission::create(['name' => 'data permohonan.delete']);

        //Data Keberatan
        Permission::create(['name' => 'data keberatan.create']);
        Permission::create(['name' => 'data keberatan.view']);
        Permission::create(['name' => 'data keberatan.edit']);
        Permission::create(['name' => 'data keberatan.delete']);

        //Profil 
        //Profil Singkat PPID
        Permission::create(['name' => 'profil singkat ppid.create']);
        Permission::create(['name' => 'profil singkat ppid.view']);
        Permission::create(['name' => 'profil singkat ppid.edit']);
        Permission::create(['name' => 'profil singkat ppid.delete']);

        //Tugas dan Fungsi
        Permission::create(['name' => 'tugas dan fungsi ppid.create']);
        Permission::create(['name' => 'tugas dan fungsi ppid.view']);
        Permission::create(['name' => 'tugas dan fungsi ppid.edit']);
        Permission::create(['name' => 'tugas dan fungsi ppid.delete']);

        //Struktur Organisasi
        Permission::create(['name' => 'struktur organisasi.create']);
        Permission::create(['name' => 'struktur organisasi.view']);
        Permission::create(['name' => 'struktur organisasi.edit']);
        Permission::create(['name' => 'struktur organisasi.delete']);

        //Visi dan Misi
        Permission::create(['name' => 'visi dan misi.create']);
        Permission::create(['name' => 'visi dan misi.view']);
        Permission::create(['name' => 'visi dan misi.edit']);
        Permission::create(['name' => 'visi dan misi.delete']);

        //Kontak
        Permission::create(['name' => 'kontak.create']);
        Permission::create(['name' => 'kontak.view']);
        Permission::create(['name' => 'kontak.edit']);
        Permission::create(['name' => 'kontak.delete']);

        //Sosial Media
        Permission::create(['name' => 'sosial media.create']);
        Permission::create(['name' => 'sosial media.view']);
        Permission::create(['name' => 'sosial media.edit']);
        Permission::create(['name' => 'sosial media.delete']);

        //Regulasi
        //Peraturan KIP
        Permission::create(['name' => 'peraturan kip.create']);
        Permission::create(['name' => 'peraturan kip.view']);
        Permission::create(['name' => 'peraturan kip.edit']);
        Permission::create(['name' => 'peraturan kip.delete']);

        //Rancangan Peraturan KIP
        Permission::create(['name' => 'rancangan peraturan kip.create']);
        Permission::create(['name' => 'rancangan peraturan kip.view']);
        Permission::create(['name' => 'rancangan peraturan kip.edit']);
        Permission::create(['name' => 'rancangan peraturan kip.delete']);

        //Informasi Publik
        //Informasi Secara Berkala
        Permission::create(['name' => 'informasi secara berkala.create']);
        Permission::create(['name' => 'informasi secara berkala.view']);
        Permission::create(['name' => 'informasi secara berkala.edit']);
        Permission::create(['name' => 'informasi secara berkala.delete']);

        //Informasi Serta Merta
        Permission::create(['name' => 'informasi serta merta.create']);
        Permission::create(['name' => 'informasi serta merta.view']);
        Permission::create(['name' => 'informasi serta merta.edit']);
        Permission::create(['name' => 'informasi serta merta.delete']);

        //Informasi Setiap Saat
        Permission::create(['name' => 'informasi setiap saat.create']);
        Permission::create(['name' => 'informasi setiap saat.view']);
        Permission::create(['name' => 'informasi setiap saat.edit']);
        Permission::create(['name' => 'informasi setiap saat.delete']);

        //Laporan
        //Laporan Triwulanan PIP
        Permission::create(['name' => 'laporan triwulanan pip.create']);
        Permission::create(['name' => 'laporan triwulanan pip.view']);
        Permission::create(['name' => 'laporan triwulanan pip.edit']);
        Permission::create(['name' => 'laporan triwulanan pip.delete']);

        //Laporan Tahunan PIP
        Permission::create(['name' => 'laporan tahunan pip.create']);
        Permission::create(['name' => 'laporan tahunan pip.view']);
        Permission::create(['name' => 'laporan tahunan pip.edit']);
        Permission::create(['name' => 'laporan tahunan pip.delete']);

        //Laporan Hasil Survei
        Permission::create(['name' => 'laporan hasil survei.create']);
        Permission::create(['name' => 'laporan hasil survei.view']);
        Permission::create(['name' => 'laporan hasil survei.edit']);
        Permission::create(['name' => 'laporan hasil survei.delete']);

        //Standar Layanan
        //Maklumat Pelayanan
        Permission::create(['name' => 'maklumat pelayanan.create']);
        Permission::create(['name' => 'maklumat pelayanan.view']);
        Permission::create(['name' => 'maklumat pelayanan.edit']);
        Permission::create(['name' => 'maklumat pelayanan.delete']);

        //Prosedur Pelayanan
        Permission::create(['name' => 'prosedur pelayanan.create']);
        Permission::create(['name' => 'prosedur pelayanan.view']);
        Permission::create(['name' => 'prosedur pelayanan.edit']);
        Permission::create(['name' => 'prosedur pelayanan.delete']);

        //Biaya Pelayanan
        Permission::create(['name' => 'biaya pelayanan.create']);
        Permission::create(['name' => 'biaya pelayanan.view']);
        Permission::create(['name' => 'biaya pelayanan.edit']);
        Permission::create(['name' => 'biaya pelayanan.delete']);

        //FAQ
        Permission::create(['name' => 'faq.create']);
        Permission::create(['name' => 'faq.view']);
        Permission::create(['name' => 'faq.edit']);
        Permission::create(['name' => 'faq.delete']);

        //Manajemen Users
        //User Pemohon
        Permission::create(['name' => 'user pemohon.create']);
        Permission::create(['name' => 'user pemohon.view']);
        Permission::create(['name' => 'user pemohon.edit']);
        Permission::create(['name' => 'user pemohon.delete']);

        //User Admin
        Permission::create(['name' => 'user admin.create']);
        Permission::create(['name' => 'user admin.view']);
        Permission::create(['name' => 'user admin.edit']);
        Permission::create(['name' => 'user admin.delete']);

        //Role Permission
        Permission::create(['name' => 'role permission.create']);
        Permission::create(['name' => 'role permission.view']);
        Permission::create(['name' => 'role permission.edit']);
        Permission::create(['name' => 'role permission.delete']);

        //Manajemen Home
        //Slider
        Permission::create(['name' => 'slider.create']);
        Permission::create(['name' => 'slider.view']);
        Permission::create(['name' => 'slider.edit']);
        Permission::create(['name' => 'slider.delete']);

        //Informasi
        Permission::create(['name' => 'informasi.create']);
        Permission::create(['name' => 'informasi.view']);
        Permission::create(['name' => 'informasi.edit']);
        Permission::create(['name' => 'informasi.delete']);

        //Video
        Permission::create(['name' => 'video.create']);
        Permission::create(['name' => 'video.view']);
        Permission::create(['name' => 'video.edit']);
        Permission::create(['name' => 'video.delete']);

        //Footer
        Permission::create(['name' => 'footer.create']);
        Permission::create(['name' => 'footer.view']);
        Permission::create(['name' => 'footer.edit']);
        Permission::create(['name' => 'footer.delete']);

        //Manajemen Menu
        Permission::create(['name' => 'manajemen menu.create']);
        Permission::create(['name' => 'manajemen menu.view']);
        Permission::create(['name' => 'manajemen menu.edit']);
        Permission::create(['name' => 'manajemen menu.delete']);
    }
}
