<?php

use Illuminate\Support\Facades\Route;

//Admin
//Profil
use App\Http\Controllers\Admin\Profil\VisiMisiController;
use App\Http\Controllers\Admin\Profil\ProfilSingkatController;
use App\Http\Controllers\Admin\Profil\TugasDanFungsiController;
use App\Http\Controllers\Admin\Profil\StrukturOrganisasiController;
use App\Http\Controllers\Admin\Profil\KontakController;
use App\Http\Controllers\Admin\Profil\SosialMediaController;

//Regulasi
use App\Http\Controllers\Admin\Regulasi\PeraturanKIPController;
use App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController;

//Informasi Publik
use App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController;

//Layanan PPID
use App\Http\Controllers\Admin\LayananPPID\DataPermohonanController;

//Manajemen User
use App\Http\Controllers\Admin\ManajemenUser\RolePermissionController;
use App\Http\Controllers\Admin\ManajemenUser\UserAdminController;

// User
//Profil
use App\Http\Controllers\Frontend\Profil\VisiMisiController as VisiMisiControllerUser;
use App\Http\Controllers\Frontend\Profil\ProfilSingkatController as ProfilSingkatControllerUser;
use App\Http\Controllers\Frontend\Profil\TugasDanFungsiController as TugasDanFungsiControllerUser;
use App\Http\Controllers\Frontend\Profil\StrukturOrganisasiController  as StrukturOrganisasiControllerUser;
use App\Http\Controllers\Frontend\Profil\KontakController as KontakControllerUser;
use App\Http\Controllers\Frontend\Profil\SosialMediaController as SosialMediaControllerUser;

//Regulasi
use App\Http\Controllers\Frontend\Regulasi\PeraturanKIPController as PeraturanKIPControllerUser;
use App\Http\Controllers\Frontend\Regulasi\RancanganPeraturanKIPController as RancanganPeraturanKIPControllerUser;

//Informasi Publik
use App\Http\Controllers\Frontend\InformasiPublik\InformasiSecaraBerkalaController as InformasiSecaraBerkalaControllerUser;

//Layanan PPID
use App\Http\Controllers\Frontend\LayananPPID\DataPermohonanController as DataPermohonanControllerUser;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Frontend
Route::get('/', function () {
    return view('index');
})->name('index');

// User
//Profil
Route::resource('tentangppid', ProfilSingkatControllerUser::class);
Route::resource('tugasdanfungsi', TugasDanFungsiControllerUser::class);
Route::resource('strukturppid', StrukturOrganisasiControllerUser::class);
Route::resource('visimisi', VisiMisiControllerUser::class);
Route::resource('kontak', KontakControllerUser::class);
Route::resource('sosialmedia', SosialMediaControllerUser::class);

//Regulasi
Route::get('/regulasi', function () {
    return view('frontend.regulasi.regulasi');
})->name('regulasi.index');
Route::resource('peraturan_kip', PeraturanKIPControllerUser::class);
Route::resource('rancangan_peraturan_kip', RancanganPeraturanKIPControllerUser::class);

//Informasi Publik, kurang  2 route
Route::get('/informasipublik', function () {
    return view('frontend.informasipublik.informasi-publik');
})->name('informasipublik.index');
Route::resource('informasi_secara_berkala', InformasiSecaraBerkalaControllerUser::class);

//Standar Layanan
Route::get('/maklumat', function () {
    return view('frontend.standarlayanan.standart-maklumat');
})->name('maklumat.index');

Route::get('/standarlayananprosedur', function () {
    return view('frontend.standarlayanan.standart-prosedur-layanan');
})->name('standarlayananprosedur.index');


Route::get('/standarlayananbiaya', function () {
    return view('frontend.standarlayanan.standart-biaya-layanan');
})->name('standarlayananbiaya.index');

//Laporan
Route::get('/laporan', function () {
    return view('frontend.laporan.laporan');
})->name('laporan.index');

Route::get('/faq', function () {
    return view('frontend.faq.faq');
})->name('faq.index');

Route::get('/dashboard', function () {
    return view('frontend.dashboard.dashboard');
})->name('dashboard.index');


//Admin
Route::get('/admin/login', function () {
    return view('auth.admin-login2');
})->name('admin.login');
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    //Profil
    Route::resource('profilsingkat', ProfilSingkatController::class);
    Route::resource('tugasdanfungsi', TugasDanFungsiController::class);
    Route::resource('strukturorganisasi', StrukturOrganisasiController::class);
    Route::resource('visimisi', VisiMisiController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('sosialmedia', SosialMediaController::class);

    //Regulasi
    Route::resource('peraturan_kip', PeraturanKIPController::class);
    Route::resource('rancangan_peraturan_kip', RancanganPeraturanKIPController::class);

    //Informasi Publik, kurang  2 route
    Route::resource('informasi_secara_berkala', InformasiSecaraBerkalaController::class);

    //Layanan PPID, kurang 1 route
    Route::resource('data_permohonan', DataPermohonanController::class);

    //Manajemen User
    Route::resource('role_permission', RolePermissionController::class);
    Route::resource('user_admin', UserAdminController::class);
});



// Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');
Route::get('/layout', function () {
    return view('layout');
});


// Route::middleware(['role:user'])->group(function () {
//     //Regulasi
//     Route::resource('peraturan_kip', PeraturanKIPController::class);
//     Route::resource('rancangan_peraturan_kip', RancanganPeraturanKIPController::class);
// });

  // Route::middleware(['role:user'])->group(function () {
    //     //Regulasi
    //     Route::resource('peraturan_kip', PeraturanKIPController::class);
    //     Route::resource('rancangan_peraturan_kip', RancanganPeraturanKIPController::class);
    // });

    // Route::middleware(['role:admin'])->group(function () {
    //     //Profil
    //     Route::resource('profilsingkat', ProfilSingkatController::class);
    //     Route::resource('tugasdanfungsi', TugasDanFungsiController::class);
    //     Route::resource('strukturorganisasi', StrukturOrganisasiController::class);
    //     Route::resource('visimisi', VisiMisiController::class);
    //     Route::resource('kontak', KontakController::class);
    //     Route::resource('sosialmedia', SosialMediaController::class);
    // });


// Route::get('/home', function () {
//     return view('profil.visimisi')->middleware(['auth', 'verified']);;
// });

// Route::get('/home', function () {
//     return view('profil.visimisi');
// })->middleware(['auth', 'verified']);;