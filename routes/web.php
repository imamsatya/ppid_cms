<?php

use Illuminate\Support\Facades\Route;

//Admin
//Profil
use App\Http\Controllers\Admin\Profil\KontakController;
use App\Http\Controllers\Admin\Profil\VisiMisiController;
use App\Http\Controllers\Admin\Profil\SosialMediaController;
use App\Http\Controllers\Admin\Profil\ProfilSingkatController;
use App\Http\Controllers\Admin\Profil\TugasDanFungsiController;
use App\Http\Controllers\Admin\Profil\StrukturOrganisasiController;

//Regulasi
use App\Http\Controllers\Admin\Regulasi\PeraturanKIPController;
use App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController;

//Informasi Publik
use App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController;

//Laporan
use App\Http\Controllers\Admin\Laporan\LaporanTriwulananController;
use App\Http\Controllers\Admin\Laporan\LaporanTahunanController;
use App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController;
use App\Http\Controllers\Admin\Laporan\LaporanBannerController;

//Layanan PPID
use App\Http\Controllers\Admin\LayananPPID\DataPermohonanController;

//Standar Layanan
use App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController;
use App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController;
use App\Http\Controllers\Admin\StandarLayanan\MaklumatController;

//Manajemen User
use App\Http\Controllers\Admin\ManajemenUser\RolePermissionController;
use App\Http\Controllers\Admin\ManajemenUser\UserAdminController;

//Manajemen Home
use App\Http\Controllers\Admin\ManajemenHome\SliderController;
use App\Http\Controllers\Admin\ManajemenHome\InformasiController;
use App\Http\Controllers\Admin\ManajemenHome\VideoController;

//Manajemen Menu
use App\Http\Controllers\Admin\ManajemenMenu\MenuController;

// User
use App\Http\Controllers\Frontend\Home\HomeController;

//Profil
use App\Http\Controllers\Frontend\Profil\ProfilSingkatController as ProfilSingkatControllerUser;
use App\Http\Controllers\Frontend\Profil\KontakController as KontakControllerUser;
use App\Http\Controllers\Frontend\Profil\VisiMisiController as VisiMisiControllerUser;
use App\Http\Controllers\Frontend\Profil\SosialMediaController as SosialMediaControllerUser;
use App\Http\Controllers\Frontend\Profil\StrukturOrganisasiController  as StrukturOrganisasiControllerUser;
use App\Http\Controllers\Frontend\Profil\TugasDanFungsiController as TugasDanFungsiControllerUser;

//Regulasi
// use App\Http\Controllers\Frontend\Regulasi\PeraturanKIPController as PeraturanKIPControllerUser;
// use App\Http\Controllers\Frontend\Regulasi\RancanganPeraturanKIPController as RancanganPeraturanKIPControllerUser;
use App\Http\Controllers\Frontend\Regulasi\RegulasiController as RegulasiControllerUser;

//Informasi Publik
use App\Http\Controllers\Frontend\InformasiPublik\InformasiPublikController as InformasiPublikControllerUser;
use App\Http\Controllers\Frontend\InformasiPublik\InformasiSecaraBerkalaController as InformasiSecaraBerkalaControllerUser;

//Layanan PPID
use App\Http\Controllers\Frontend\LayananPPID\DataPermohonanController as DataPermohonanControllerUser;

//Standar Layanan
use App\Http\Controllers\Frontend\StandarLayanan\MaklumatController as MaklumatControllerUser;
use App\Http\Controllers\Frontend\StandarLayanan\ProsedurLayananController as ProsedurLayananControllerUser;
use App\Http\Controllers\Frontend\StandarLayanan\BiayaLayananController as BiayaLayananControllerUser;





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


// User
//Home
Route::resource('/', HomeController::class);
//Profil
Route::resource('tentangppid', ProfilSingkatControllerUser::class);
Route::resource('tugasdanfungsi', TugasDanFungsiControllerUser::class);
Route::resource('strukturppid', StrukturOrganisasiControllerUser::class);
Route::resource('visimisi', VisiMisiControllerUser::class);
Route::resource('kontak', KontakControllerUser::class);
Route::resource('sosialmedia', SosialMediaControllerUser::class);

//Regulasi
// Route::get('/regulasi', function () {
//     return view('frontend.regulasi.regulasi');
// })->name('regulasi.index');
Route::resource('regulasi', RegulasiControllerUser::class);
// Route::resource('peraturan_kip', PeraturanKIPControllerUser::class);
// Route::resource('rancangan_peraturan_kip', RancanganPeraturanKIPControllerUser::class);

//Informasi Publik, kurang  2 route
// Route::get('/informasipublik', function () {
//     return view('frontend.informasipublik.informasi-publik');
// })->name('informasipublik.index');
Route::resource('informasipublik', InformasiPublikControllerUser::class);
Route::resource('informasi_secara_berkala', InformasiSecaraBerkalaControllerUser::class);


//Standar Layanan
// Route::get('/maklumat', function () {
//     return view('frontend.standarlayanan.standart-maklumat');
// })->name('maklumat.index');
Route::resource('maklumat', MaklumatControllerUser::class);

// Route::get('/standarlayananprosedur', function () {
//     return view('frontend.standarlayanan.standart-prosedur-layanan');
// })->name('standarlayananprosedur.index');
Route::resource('prosedurlayanan', ProsedurLayananControllerUser::class);


// Route::get('/standarlayananbiaya', function () {
//     return view('frontend.standarlayanan.standart-biaya-layanan');
// })->name('standarlayananbiaya.index');
Route::resource('standarlayananbiaya', BiayaLayananControllerUser::class);
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
    Route::post('/strukturorganisasi/bagan_kanan', [StrukturOrganisasiController::class, 'baganKananStore'])->name('strukturorganisasi.bagankanan.store');
    Route::patch('/strukturorganisasi/bagan_kanan/update/{id}', [StrukturOrganisasiController::class, 'baganKananUpdate'])->name('strukturorganisasi.bagankanan.update');
    Route::delete('/strukturorganisasi/bagan_kanan/delete/{id}', [StrukturOrganisasiController::class, 'baganKananDestroy'])->name('strukturorganisasi.bagankanan.delete');

    Route::resource('visimisi', VisiMisiController::class);
    Route::resource('kontak', KontakController::class);
    Route::post('/kontak/dokumentasi_ruang', [KontakController::class, 'dokumentasiStore'])->name('kontak.dokumentasi.store');
    Route::delete('/kontak/dokumentasi_ruang/delete/{id}', [KontakController::class, 'dokumentasiDestroy'])->name('kontak.dokumentasi.delete');

    Route::resource('sosialmedia', SosialMediaController::class);

    //Regulasi
    Route::resource('peraturan_kip', PeraturanKIPController::class);
    Route::post('/peraturan_kip/regulasi_banner', [PeraturanKIPController::class, 'bannerStore'])->name('peraturan_kip.banner.store');
    Route::resource('rancangan_peraturan_kip', RancanganPeraturanKIPController::class);
    Route::post('/rancangan_peraturan_kip/regulasi_banner', [RancanganPeraturanKIPController::class, 'bannerStore'])->name('rancangan_peraturan_kip.banner.store');

    //Informasi Publik
    Route::resource('informasi_secara_berkala', InformasiSecaraBerkalaController::class);
    Route::resource('informasi_serta_merta', InformasiSertaMertaController::class);
    Route::resource('informasi_setiap_saat', InformasiSetiapSaatController::class);
    Route::post('/informasi_secara_berkala/banner', [InformasiSecaraBerkalaController::class, 'bannerStore'])->name('informasi_secara_berkala.banner.store');

    //Laporan
    Route::resource('laporan_triwulanan', LaporanTriwulananController::class);
    Route::resource('laporan_tahunan', LaporanTahunanController::class);
    Route::resource('laporan_hasil_survei', LaporanHasilSurveiController::class);
    Route::resource('laporan_banner', LaporanBannerController::class);



    //Standar Layanan
    Route::resource('maklumat', MaklumatController::class);
    Route::resource('prosedurlayanan', ProsedurLayananController::class);
    Route::post('/prosedurlayanan/banner', [ProsedurLayananController::class, 'bannerStore'])->name('prosedurlayanan.banner.store');
    Route::resource('biayalayanan', BiayaLayananController::class);

    //Layanan PPID, kurang 1 route
    Route::resource('data_permohonan', DataPermohonanController::class);

    //Manajemen User
    Route::resource('role_permission', RolePermissionController::class);
    Route::resource('user_admin', UserAdminController::class);

    //Manajemen Home
    Route::resource('slider', SliderController::class);
    Route::resource('informasi', InformasiController::class);
    Route::post('/informasi/image', [InformasiController::class, 'imageStore'])->name('informasi.image.store');
    Route::resource('video', VideoController::class);

    //Manajemen Menu
    Route::resource('manajemen_menu', MenuController::class);
});



// Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');
Route::get('/layout', function () {
    return view('layout');
});
