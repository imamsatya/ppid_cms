<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
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
        //     DB::table('roles')->insert([
        //         [
        //             'name' => 'admin',
        //             'guard_name' => 'web'
        //         ],
        //         [
        //             'name' => 'user',
        //             'guard_name' => 'web'
        //         ],

        //     ]);
        // }

        //Admin
        $admin = Role::create(['name' => 'admin']);

        //Manajemen Users
        //User Pemohon
        $admin->givePermissionTo('user pemohon.create');
        $admin->givePermissionTo('user pemohon.view');
        $admin->givePermissionTo('user pemohon.edit');
        $admin->givePermissionTo('user pemohon.delete');

        //User Admin
        $admin->givePermissionTo('user admin.create');
        $admin->givePermissionTo('user admin.view');
        $admin->givePermissionTo('user admin.edit');
        $admin->givePermissionTo('user admin.delete');

        //Role Permission
        $admin->givePermissionTo('role permission.create');
        $admin->givePermissionTo('role permission.view');
        $admin->givePermissionTo('role permission.edit');
        $admin->givePermissionTo('role permission.delete');

        //User
        $user = Role::create(['name' => 'user']);
        //Profil 
        //Profil Singkat PPID
        $user->givePermissionTo('profil singkat ppid.create');
        $user->givePermissionTo('profil singkat ppid.view');
        $user->givePermissionTo('profil singkat ppid.edit');
        $user->givePermissionTo('profil singkat ppid.delete');

        //Tugas dan Fungsi
        $user->givePermissionTo('tugas dan fungsi ppid.create');
        $user->givePermissionTo('tugas dan fungsi ppid.view');
        $user->givePermissionTo('tugas dan fungsi ppid.edit');
        $user->givePermissionTo('tugas dan fungsi ppid.delete');

        //Struktur Organisasi
        $user->givePermissionTo('struktur organisasi.create');
        $user->givePermissionTo('struktur organisasi.view');
        $user->givePermissionTo('struktur organisasi.edit');
        $user->givePermissionTo('struktur organisasi.delete');

        //Visi dan Misi
        $user->givePermissionTo('visi dan misi.create');
        $user->givePermissionTo('visi dan misi.view');
        $user->givePermissionTo('visi dan misi.edit');
        $user->givePermissionTo('visi dan misi.delete');

        //Kontak
        $user->givePermissionTo('kontak.create');
        $user->givePermissionTo('kontak.view');
        $user->givePermissionTo('kontak.edit');
        $user->givePermissionTo('kontak.delete');

        //Sosial Media
        $user->givePermissionTo('sosial media.create');
        $user->givePermissionTo('sosial media.view');
        $user->givePermissionTo('sosial media.edit');
        $user->givePermissionTo('sosial media.delete');

        $super = Role::create(['name' => 'super']);
        $super->givePermissionTo('dashboard.create');
        $super->givePermissionTo('dashboard.view');
        $super->givePermissionTo('dashboard.edit');
        $super->givePermissionTo('dashboard.delete');

        $super->givePermissionTo('data permohonan.create');
        $super->givePermissionTo('data permohonan.view');
        $super->givePermissionTo('data permohonan.edit');
        $super->givePermissionTo('data permohonan.delete');

        //Data Keberatan
        $super->givePermissionTo('data keberatan.create');
        $super->givePermissionTo('data keberatan.view');
        $super->givePermissionTo('data keberatan.edit');
        $super->givePermissionTo('data keberatan.delete');

        //Profil 
        //Profil Singkat PPID
        $super->givePermissionTo('profil singkat ppid.create');
        $super->givePermissionTo('profil singkat ppid.view');
        $super->givePermissionTo('profil singkat ppid.edit');
        $super->givePermissionTo('profil singkat ppid.delete');

        //Tugas dan Fungsi
        $super->givePermissionTo('tugas dan fungsi ppid.create');
        $super->givePermissionTo('tugas dan fungsi ppid.view');
        $super->givePermissionTo('tugas dan fungsi ppid.edit');
        $super->givePermissionTo('tugas dan fungsi ppid.delete');

        //Struktur Organisasi
        $super->givePermissionTo('struktur organisasi.create');
        $super->givePermissionTo('struktur organisasi.view');
        $super->givePermissionTo('struktur organisasi.edit');
        $super->givePermissionTo('struktur organisasi.delete');

        //Visi dan Misi
        $super->givePermissionTo('visi dan misi.create');
        $super->givePermissionTo('visi dan misi.view');
        $super->givePermissionTo('visi dan misi.edit');
        $super->givePermissionTo('visi dan misi.delete');

        //Kontak
        $super->givePermissionTo('kontak.create');
        $super->givePermissionTo('kontak.view');
        $super->givePermissionTo('kontak.edit');
        $super->givePermissionTo('kontak.delete');

        //Sosial Media
        $super->givePermissionTo('sosial media.create');
        $super->givePermissionTo('sosial media.view');
        $super->givePermissionTo('sosial media.edit');
        $super->givePermissionTo('sosial media.delete');

        //Regulasi
        //Peraturan KIP
        $super->givePermissionTo('peraturan kip.create');
        $super->givePermissionTo('peraturan kip.view');
        $super->givePermissionTo('peraturan kip.edit');
        $super->givePermissionTo('peraturan kip.delete');

        //Rancangan Peraturan KIP
        $super->givePermissionTo('rancangan peraturan kip.create');
        $super->givePermissionTo('rancangan peraturan kip.view');
        $super->givePermissionTo('rancangan peraturan kip.edit');
        $super->givePermissionTo('rancangan peraturan kip.delete');

        //Informasi Publik
        //Informasi Secara Berkala
        $super->givePermissionTo('informasi secara berkala.create');
        $super->givePermissionTo('informasi secara berkala.view');
        $super->givePermissionTo('informasi secara berkala.edit');
        $super->givePermissionTo('informasi secara berkala.delete');

        //Informasi Serta Merta
        $super->givePermissionTo('informasi serta merta.create');
        $super->givePermissionTo('informasi serta merta.view');
        $super->givePermissionTo('informasi serta merta.edit');
        $super->givePermissionTo('informasi serta merta.delete');

        //Informasi Setiap Saat
        $super->givePermissionTo('informasi setiap saat.create');
        $super->givePermissionTo('informasi setiap saat.view');
        $super->givePermissionTo('informasi setiap saat.edit');
        $super->givePermissionTo('informasi setiap saat.delete');

        //Laporan
        //Laporan Triwulanan PIP
        $super->givePermissionTo('laporan triwulanan pip.create');
        $super->givePermissionTo('laporan triwulanan pip.view');
        $super->givePermissionTo('laporan triwulanan pip.edit');
        $super->givePermissionTo('laporan triwulanan pip.delete');

        //Laporan Tahunan PIP
        $super->givePermissionTo('laporan tahunan pip.create');
        $super->givePermissionTo('laporan tahunan pip.view');
        $super->givePermissionTo('laporan tahunan pip.edit');
        $super->givePermissionTo('laporan tahunan pip.delete');

        //Laporan Hasil Survei
        $super->givePermissionTo('laporan hasil survei.create');
        $super->givePermissionTo('laporan hasil survei.view');
        $super->givePermissionTo('laporan hasil survei.edit');
        $super->givePermissionTo('laporan hasil survei.delete');

        //Standar Layanan
        //Maklumat Pelayanan
        $super->givePermissionTo('maklumat pelayanan.create');
        $super->givePermissionTo('maklumat pelayanan.view');
        $super->givePermissionTo('maklumat pelayanan.edit');
        $super->givePermissionTo('maklumat pelayanan.delete');

        //Prosedur Pelayanan
        $super->givePermissionTo('prosedur pelayanan.create');
        $super->givePermissionTo('prosedur pelayanan.view');
        $super->givePermissionTo('prosedur pelayanan.edit');
        $super->givePermissionTo('prosedur pelayanan.delete');

        //Biaya Pelayanan
        $super->givePermissionTo('biaya pelayanan.create');
        $super->givePermissionTo('biaya pelayanan.view');
        $super->givePermissionTo('biaya pelayanan.edit');
        $super->givePermissionTo('biaya pelayanan.delete');

        //FAQ
        $super->givePermissionTo('faq.create');
        $super->givePermissionTo('faq.view');
        $super->givePermissionTo('faq.edit');
        $super->givePermissionTo('faq.delete');

        //Manajemen Users
        //User Pemohon
        $super->givePermissionTo('user pemohon.create');
        $super->givePermissionTo('user pemohon.view');
        $super->givePermissionTo('user pemohon.edit');
        $super->givePermissionTo('user pemohon.delete');

        //User Admin
        $super->givePermissionTo('user admin.create');
        $super->givePermissionTo('user admin.view');
        $super->givePermissionTo('user admin.edit');
        $super->givePermissionTo('user admin.delete');

        //Role Permission
        $super->givePermissionTo('role permission.create');
        $super->givePermissionTo('role permission.view');
        $super->givePermissionTo('role permission.edit');
        $super->givePermissionTo('role permission.delete');
    }
}
