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

<<<<<<< HEAD
        // //Dashboard
=======
        //Dashboard
>>>>>>> origin/main
        Permission::create(['name' => 'dashboard.create']);
        Permission::create(['name' => 'dashboard.view']);
        Permission::create(['name' => 'dashboard.edit']);
        Permission::create(['name' => 'dashboard.delete']);

<<<<<<< HEAD
        // //Layanan PPID
        // //Data Permohonan
=======
        //Layanan PPID
        //Data Permohonan
>>>>>>> origin/main
        Permission::create(['name' => 'data permohonan.create']);
        Permission::create(['name' => 'data permohonan.view']);
        Permission::create(['name' => 'data permohonan.edit']);
        Permission::create(['name' => 'data permohonan.delete']);

<<<<<<< HEAD
        // //Data Keberatan
=======
        //Data Keberatan
>>>>>>> origin/main
        Permission::create(['name' => 'data keberatan.create']);
        Permission::create(['name' => 'data keberatan.view']);
        Permission::create(['name' => 'data keberatan.edit']);
        Permission::create(['name' => 'data keberatan.delete']);

<<<<<<< HEAD
        // //Profil 
        // //Profil Singkat PPID
=======
        //Profil 
        //Profil Singkat PPID
>>>>>>> origin/main
        Permission::create(['name' => 'profil singkat ppid.create']);
        Permission::create(['name' => 'profil singkat ppid.view']);
        Permission::create(['name' => 'profil singkat ppid.edit']);
        Permission::create(['name' => 'profil singkat ppid.delete']);

<<<<<<< HEAD
        // //Tugas dan Fungsi
=======
        //Tugas dan Fungsi
>>>>>>> origin/main
        Permission::create(['name' => 'tugas dan fungsi ppid.create']);
        Permission::create(['name' => 'tugas dan fungsi ppid.view']);
        Permission::create(['name' => 'tugas dan fungsi ppid.edit']);
        Permission::create(['name' => 'tugas dan fungsi ppid.delete']);

<<<<<<< HEAD
        // //Struktur Organisasi
=======
        //Struktur Organisasi
>>>>>>> origin/main
        Permission::create(['name' => 'struktur organisasi.create']);
        Permission::create(['name' => 'struktur organisasi.view']);
        Permission::create(['name' => 'struktur organisasi.edit']);
        Permission::create(['name' => 'struktur organisasi.delete']);

<<<<<<< HEAD
        // //Visi dan Misi
=======
        //Visi dan Misi
>>>>>>> origin/main
        Permission::create(['name' => 'visi dan misi.create']);
        Permission::create(['name' => 'visi dan misi.view']);
        Permission::create(['name' => 'visi dan misi.edit']);
        Permission::create(['name' => 'visi dan misi.delete']);

<<<<<<< HEAD
        // //Kontak
=======
        //Kontak
>>>>>>> origin/main
        Permission::create(['name' => 'kontak.create']);
        Permission::create(['name' => 'kontak.view']);
        Permission::create(['name' => 'kontak.edit']);
        Permission::create(['name' => 'kontak.delete']);

<<<<<<< HEAD
        // //Sosial Media
=======
        //Sosial Media
>>>>>>> origin/main
        Permission::create(['name' => 'sosial media.create']);
        Permission::create(['name' => 'sosial media.view']);
        Permission::create(['name' => 'sosial media.edit']);
        Permission::create(['name' => 'sosial media.delete']);

<<<<<<< HEAD
        // //Regulasi
        // //Peraturan KIP
=======
        //Regulasi
        //Peraturan KIP
>>>>>>> origin/main
        Permission::create(['name' => 'peraturan kip.create']);
        Permission::create(['name' => 'peraturan kip.view']);
        Permission::create(['name' => 'peraturan kip.edit']);
        Permission::create(['name' => 'peraturan kip.delete']);

<<<<<<< HEAD
        // //Rancangan Peraturan KIP
=======
        //Rancangan Peraturan KIP
>>>>>>> origin/main
        Permission::create(['name' => 'rancangan peraturan kip.create']);
        Permission::create(['name' => 'rancangan peraturan kip.view']);
        Permission::create(['name' => 'rancangan peraturan kip.edit']);
        Permission::create(['name' => 'rancangan peraturan kip.delete']);

<<<<<<< HEAD
        // //Informasi Publik
        // //Informasi Secara Berkala
=======
        //Informasi Publik
        //Informasi Secara Berkala
>>>>>>> origin/main
        Permission::create(['name' => 'informasi secara berkala.create']);
        Permission::create(['name' => 'informasi secara berkala.view']);
        Permission::create(['name' => 'informasi secara berkala.edit']);
        Permission::create(['name' => 'informasi secara berkala.delete']);

<<<<<<< HEAD
        // //Informasi Serta Merta
=======
        //Informasi Serta Merta
>>>>>>> origin/main
        Permission::create(['name' => 'informasi serta merta.create']);
        Permission::create(['name' => 'informasi serta merta.view']);
        Permission::create(['name' => 'informasi serta merta.edit']);
        Permission::create(['name' => 'informasi serta merta.delete']);

<<<<<<< HEAD
        // //Informasi Setiap Saat
=======
        //Informasi Setiap Saat
>>>>>>> origin/main
        Permission::create(['name' => 'informasi setiap saat.create']);
        Permission::create(['name' => 'informasi setiap saat.view']);
        Permission::create(['name' => 'informasi setiap saat.edit']);
        Permission::create(['name' => 'informasi setiap saat.delete']);

<<<<<<< HEAD
        // //Laporan
        // //Laporan Triwulanan PIP
=======
        //Laporan
        //Laporan Triwulanan PIP
>>>>>>> origin/main
        Permission::create(['name' => 'laporan triwulanan pip.create']);
        Permission::create(['name' => 'laporan triwulanan pip.view']);
        Permission::create(['name' => 'laporan triwulanan pip.edit']);
        Permission::create(['name' => 'laporan triwulanan pip.delete']);

<<<<<<< HEAD
        // //Laporan Tahunan PIP
=======
        //Laporan Tahunan PIP
>>>>>>> origin/main
        Permission::create(['name' => 'laporan tahunan pip.create']);
        Permission::create(['name' => 'laporan tahunan pip.view']);
        Permission::create(['name' => 'laporan tahunan pip.edit']);
        Permission::create(['name' => 'laporan tahunan pip.delete']);

<<<<<<< HEAD
        // //Laporan Hasil Survei
=======
        //Laporan Hasil Survei
>>>>>>> origin/main
        Permission::create(['name' => 'laporan hasil survei.create']);
        Permission::create(['name' => 'laporan hasil survei.view']);
        Permission::create(['name' => 'laporan hasil survei.edit']);
        Permission::create(['name' => 'laporan hasil survei.delete']);

<<<<<<< HEAD
        // //Standar Layanan
        // //Maklumat Pelayanan
=======
        //Standar Layanan
        //Maklumat Pelayanan
>>>>>>> origin/main
        Permission::create(['name' => 'maklumat pelayanan.create']);
        Permission::create(['name' => 'maklumat pelayanan.view']);
        Permission::create(['name' => 'maklumat pelayanan.edit']);
        Permission::create(['name' => 'maklumat pelayanan.delete']);

<<<<<<< HEAD
        // //Prosedur Pelayanan
=======
        //Prosedur Pelayanan
>>>>>>> origin/main
        Permission::create(['name' => 'prosedur pelayanan.create']);
        Permission::create(['name' => 'prosedur pelayanan.view']);
        Permission::create(['name' => 'prosedur pelayanan.edit']);
        Permission::create(['name' => 'prosedur pelayanan.delete']);

<<<<<<< HEAD
        // //Biaya Pelayanan
=======
        //Biaya Pelayanan
>>>>>>> origin/main
        Permission::create(['name' => 'biaya pelayanan.create']);
        Permission::create(['name' => 'biaya pelayanan.view']);
        Permission::create(['name' => 'biaya pelayanan.edit']);
        Permission::create(['name' => 'biaya pelayanan.delete']);

<<<<<<< HEAD
        // //FAQ
=======
        //FAQ
>>>>>>> origin/main
        Permission::create(['name' => 'faq.create']);
        Permission::create(['name' => 'faq.view']);
        Permission::create(['name' => 'faq.edit']);
        Permission::create(['name' => 'faq.delete']);

<<<<<<< HEAD
        // //Manajemen Users
        // //User Pemohon
=======
        //Manajemen Users
        //User Pemohon
>>>>>>> origin/main
        Permission::create(['name' => 'user pemohon.create']);
        Permission::create(['name' => 'user pemohon.view']);
        Permission::create(['name' => 'user pemohon.edit']);
        Permission::create(['name' => 'user pemohon.delete']);

<<<<<<< HEAD
        // //User Admin
=======
        //User Admin
>>>>>>> origin/main
        Permission::create(['name' => 'user admin.create']);
        Permission::create(['name' => 'user admin.view']);
        Permission::create(['name' => 'user admin.edit']);
        Permission::create(['name' => 'user admin.delete']);

<<<<<<< HEAD
        // //Role Permission
=======
        //Role Permission
>>>>>>> origin/main
        Permission::create(['name' => 'role permission.create']);
        Permission::create(['name' => 'role permission.view']);
        Permission::create(['name' => 'role permission.edit']);
        Permission::create(['name' => 'role permission.delete']);

<<<<<<< HEAD
        // //Manajemen Home
        // //Slider
=======
        //Manajemen Home
        //Slider
>>>>>>> origin/main
        Permission::create(['name' => 'slider.create']);
        Permission::create(['name' => 'slider.view']);
        Permission::create(['name' => 'slider.edit']);
        Permission::create(['name' => 'slider.delete']);

<<<<<<< HEAD
        // //Informasi
=======
        //Informasi
>>>>>>> origin/main
        Permission::create(['name' => 'informasi.create']);
        Permission::create(['name' => 'informasi.view']);
        Permission::create(['name' => 'informasi.edit']);
        Permission::create(['name' => 'informasi.delete']);

<<<<<<< HEAD
        // //Video
=======
        //Video
>>>>>>> origin/main
        Permission::create(['name' => 'video.create']);
        Permission::create(['name' => 'video.view']);
        Permission::create(['name' => 'video.edit']);
        Permission::create(['name' => 'video.delete']);

<<<<<<< HEAD
        // //Footer
=======
        //Footer
>>>>>>> origin/main
        Permission::create(['name' => 'footer.create']);
        Permission::create(['name' => 'footer.view']);
        Permission::create(['name' => 'footer.edit']);
        Permission::create(['name' => 'footer.delete']);
<<<<<<< HEAD

        //Manajemen Menu
        Permission::create(['name' => 'manajemen menu.create']);
        Permission::create(['name' => 'manajemen menu.view']);
        Permission::create(['name' => 'manajemen menu.edit']);
        Permission::create(['name' => 'manajemen menu.delete']);
=======
>>>>>>> origin/main
    }
}
