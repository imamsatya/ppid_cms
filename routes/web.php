<?php

use Illuminate\Support\Facades\Route;

//Admin
//Dashboard
use App\Http\Controllers\Admin\Dashboard\DashboardController;
<<<<<<< HEAD
=======
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
use App\Http\Controllers\Admin\LayananPPID\DataKeberatanController;

//Standar Layanan
use App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController;
use App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController;
use App\Http\Controllers\Admin\StandarLayanan\MaklumatController;

//FAQ
use App\Http\Controllers\Admin\FAQ\FaqController;
use App\Http\Controllers\Admin\FAQ\FaqBannerController;

>>>>>>> origin/main
//Manajemen User
use App\Http\Controllers\Admin\ManajemenUser\RolePermissionController;
use App\Http\Controllers\Admin\ManajemenUser\UserAdminController;
use App\Http\Controllers\Admin\ManajemenUser\UserPemohonController;

<<<<<<< HEAD
//Layanan PPID
use App\Http\Controllers\Admin\LayananPPID\DataPermohonanController;
use App\Http\Controllers\Admin\LayananPPID\DataKeberatanController;
=======
//Manajemen Home
use App\Http\Controllers\Admin\ManajemenHome\SliderController;
use App\Http\Controllers\Admin\ManajemenHome\InformasiController;
use App\Http\Controllers\Admin\ManajemenHome\VideoController;
use App\Http\Controllers\Admin\ManajemenHome\FooterController;
>>>>>>> origin/main

//Manajemen Menu
use App\Http\Controllers\Admin\ManajemenMenu\MenuController;
use App\Http\Controllers\Admin\Referensi\SettingKalenderController;
// User
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Home\SiaranPersController;

//Dashboard
use App\Http\Controllers\Frontend\Dashboard\DashboardController as DashboardControllerUser;

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
use App\Http\Controllers\Frontend\LayananPPID\DataKeberatanController as DataKeberatanControllerUser;

//Standar Layanan
use App\Http\Controllers\Frontend\StandarLayanan\MaklumatController as MaklumatControllerUser;
use App\Http\Controllers\Frontend\StandarLayanan\ProsedurLayananController as ProsedurLayananControllerUser;
use App\Http\Controllers\Frontend\StandarLayanan\BiayaLayananController as BiayaLayananControllerUser;

//Laporan
use App\Http\Controllers\Frontend\Laporan\LaporanController as LaporanControllerUser;

//Faq
use App\Http\Controllers\Frontend\FAQ\FaqController as FaqControllerUser;

//Users PPID Auth
use App\Http\Controllers\Auth\UserPPIDLoginController;
use App\Http\Controllers\Auth\UserAdminController as UserAdminAuthController;
<<<<<<< HEAD
use App\Http\Controllers\Auth\ForgotPasswordController;

//CAS KBUMN
use App\Http\Controllers\AuthController;
=======
>>>>>>> origin/main




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
<<<<<<< HEAD
Route::get('/detailtemplate', function () {
    return view('admin.layanan_ppid.detailtemplate');
});
// Route::get('/htmltemplate2', function () {
//     return view('admin.layanan_ppid.template2');
// });
// Route::get('/htmltemplate', function () {
//     return view('admin.layanan_ppid.htmltemplate');
// });
// Route::get('/tesjawaban', function () {
//     return view('admin.layanan_ppid.answer_template');
// });
// Route::get('/testemplate', function () {
//     return view('admin.layanan_ppid.pdf');
// });
// Route::get('/tesemail', function () {
//     return view('activation');
// });

// Route::get('/lupa', function () {
//     return view('forgot');
// });
//User PPID
Route::middleware(['frame.headers.middleware','xsssanitizer'])->group(function () {
    Route::get('data-statistik', [HomeController::class, 'getDataStatistik']);

    // Route::get('admin/', [UserPPIDLoginController::class, 'index'])
    //     ->name('admin.home');
    Route::get('login', [UserPPIDLoginController::class, 'login'])->middleware('guest:usersppid')->name('userppid.login');
    Route::post('/user/login', [UserPPIDLoginController::class, 'handleLogin'])->name('userppid.handleLogin');
    Route::post('logout', [UserPPIDLoginController::class, 'logout'])->name('userppid.logout');
    Route::get('signup',  [UserPPIDLoginController::class, 'register'])->middleware('guest:usersppid')->name('signup');
    Route::post('signup',  [UserPPIDLoginController::class, 'handleRegister'])->name('signup.store');
    Route::get('ganti_password', [UserPPIDLoginController::class, 'gantiPassword'])->middleware('auth:usersppid')->name('userppid.ganti_password');
    Route::post('ganti_password', [UserPPIDLoginController::class, 'handleGantiPassword'])->middleware('auth:usersppid')->name('userppid.ganti_password.store');

    Route::get('verifikasi', [UserPPIDLoginController::class, 'verifikasi'])->middleware('guest:usersppid')->name('userppid.verifikasi');
    Route::post('verifikasi', [UserPPIDLoginController::class, 'handleVerifikasi'])->middleware('guest:usersppid')->name('verifikasi.store');
    Route::post('resend_otp', [UserPPIDLoginController::class, 'handleResendOTP'])->middleware('guest:usersppid')->name('resend_otp.store');

    //forgot password
    // Route::get('lupa_password', [UserPPIDLoginController::class, 'lupaPassword'])->middleware('guest:usersppid')->name('userppid.lupa_password');
    Route::get('lupa-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->middleware('guest:usersppid')->name('userppid.lupa_password');
    Route::post('lupa-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->middleware('guest:usersppid')->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->middleware('guest:usersppid')->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->middleware('guest:usersppid')->name('reset.password.post');

    // User

    Route::resource('dashboard', DashboardControllerUser::class)->middleware('auth:usersppid');
    Route::post('update-click-survei/permohonan', [DashboardControllerUser::class, 'updateClickSurveiPermohonan'])->middleware('auth:usersppid');
    Route::post('update-click-survei/keberatan', [DashboardControllerUser::class, 'updateClickSurveiKeberatan'])->middleware('auth:usersppid');
    //Home
    Route::resource('/', HomeController::class);
    Route::get('siaranpers/{id}', [SiaranPersController::class, 'show'])->name('siaranpers.show');
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
    // Route::get('/laporan', function () {
    //     return view('frontend.laporan.laporan');
    // })->name('laporan.index');
    Route::resource('laporan', LaporanControllerUser::class);


    // Route::get('/faq', function () {
    //     return view('frontend.faq.faq');
    // })->name('faq.index');
    Route::resource('faq', FaqControllerUser::class);



    // yovi
    Route::get('ppid-cara-mendapatkan', [DataPermohonanControllerUser::class, 'ppidCaraMendapatkan']);
    Route::get('ppid-cara-memberikan', [DataPermohonanControllerUser::class, 'ppidCaraMemberikan']);
    Route::post('submit-data-permohonan', [DataPermohonanControllerUser::class, 'submitPermintaanUser']);
    Route::get('ppid-data-permohonan', [DataPermohonanControllerUser::class, 'ppidDataPermohonan']);
    Route::get('ppid-data-permohonan-spec/{id}', [DataPermohonanControllerUser::class, 'ppidDataPermohonanSpec']);
    Route::get('ppid-jenis-pemohon', [DataPermohonanControllerUser::class, 'ppidJenisPemohon']);
    Route::delete('ppid-data-permohonan/{id}', [DataPermohonanControllerUser::class, 'ppidHapusDataPermohonan']);
    Route::get('ppid-status-permohonan', [DataPermohonanControllerUser::class, 'ppidStatusPermohonan']);
    //keberatan
    Route::get('ppid-kategori-keberatan', [DataKeberatanControllerUser::class, 'ppidKategoriKeberatan']);
    Route::post('submit-data-keberatan', [DataKeberatanControllerUser::class, 'submitKeberatanUser']);
    Route::get('ppid-data-keberatan', [DataKeberatanControllerUser::class, 'ppidDataKeberatan']);
    Route::get('ppid-data-keberatan-spec/{id}', [DataKeberatanControllerUser::class, 'ppidDataKeberatanSpec']);
    Route::delete('ppid-data-keberatan/{id}', [DataKeberatanControllerUser::class, 'ppidHapusDataKeberatan']);
    Route::get('ppid-permohonan-sebelumnya/{id}', [DataKeberatanControllerUser::class, 'ppidDataPermohonanSebelumnya']);
    Route::get('ppid-status-keberatan', [DataKeberatanControllerUser::class, 'ppidStatusKeberatan']);

    //survey
    Route::post('submit-data-survey', [DataPermohonanControllerUser::class, 'submitSurveyUser']);
});

Route::middleware(['cas', 'user'])->group(function () {
    //Dashboard

    Route::prefix('manajemen-ppid')->group(function () {
        Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('manajemen-ppid.logout');
        Route::get('/', 'App\Http\Controllers\Admin\Dashboard\DashboardController@index')->name('/manajemen-ppid');
        Route::get('/dashboard', 'App\Http\Controllers\Admin\Dashboard\DashboardController@index')->name('manajemen-ppid.dashboard.index');

        //Profil
        Route::prefix('profilsingkat')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Profil\ProfilSingkatController@index')->name('manajemen-ppid.profilsingkat.index');
            Route::post('create', 'App\Http\Controllers\Admin\Profil\ProfilSingkatController@create')->name('manajemen-ppid.profilsingkat.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Profil\ProfilSingkatController@edit')->name('manajemen-ppid.profilsingkat.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Profil\ProfilSingkatController@store')->name('manajemen-ppid.profilsingkat.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Profil\ProfilSingkatController@delete')->name('manajemen-ppid.profilsingkat.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Profil\ProfilSingkatController@show')->name('manajemen-ppid.profilsingkat.show');
        });

        Route::prefix('tugasdanfungsi')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Profil\TugasDanFungsiController@index')->name('manajemen-ppid.tugasdanfungsi.index');
            Route::post('create', 'App\Http\Controllers\Admin\Profil\TugasDanFungsiController@create')->name('manajemen-ppid.tugasdanfungsi.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Profil\TugasDanFungsiController@edit')->name('manajemen-ppid.tugasdanfungsi.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Profil\TugasDanFungsiController@store')->name('manajemen-ppid.tugasdanfungsi.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Profil\TugasDanFungsiController@delete')->name('manajemen-ppid.tugasdanfungsi.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Profil\TugasDanFungsiController@show')->name('manajemen-ppid.tugasdanfungsi.show');
        });

        Route::prefix('strukturorganisasi')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@index')->name('manajemen-ppid.strukturorganisasi.index');
            Route::post('create', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@create')->name('manajemen-ppid.strukturorganisasi.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@edit')->name('manajemen-ppid.strukturorganisasi.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@store')->name('manajemen-ppid.strukturorganisasi.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@destroy')->name('manajemen-ppid.strukturorganisasi.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@show')->name('manajemen-ppid.strukturorganisasi.show');
            Route::post('/strukturorganisasi/bagan_kanan', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@baganKananStore')->name('manajemen-ppid.strukturorganisasi.bagankanan.store');
            Route::patch('/strukturorganisasi/bagan_kanan/update/{id}', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@baganKananUpdate')->name('manajemen-ppid.strukturorganisasi.bagankanan.update');
            Route::post('/strukturorganisasi/bagan_kanan/delete', 'App\Http\Controllers\Admin\Profil\StrukturOrganisasiController@baganKananDestroy')->name('manajemen-ppid.strukturorganisasi.bagankanan.delete');
        });

        Route::prefix('visimisi')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Profil\VisiMisiController@index')->name('manajemen-ppid.visimisi.index');
            Route::post('create', 'App\Http\Controllers\Admin\Profil\VisiMisiController@create')->name('manajemen-ppid.visimisi.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Profil\VisiMisiController@edit')->name('manajemen-ppid.visimisi.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Profil\VisiMisiController@store')->name('manajemen-ppid.visimisi.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Profil\VisiMisiController@delete')->name('manajemen-ppid.visimisi.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Profil\VisiMisiController@show')->name('manajemen-ppid.visimisi.show');
        });

        Route::prefix('kontak')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Profil\KontakController@index')->name('manajemen-ppid.kontak.index');
            Route::post('create', 'App\Http\Controllers\Admin\Profil\KontakController@create')->name('manajemen-ppid.kontak.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Profil\KontakController@edit')->name('manajemen-ppid.kontak.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Profil\KontakController@store')->name('manajemen-ppid.kontak.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Profil\KontakController@delete')->name('manajemen-ppid.kontak.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Profil\KontakController@show')->name('manajemen-ppid.kontak.show');
            Route::post('/kontak/dokumentasi_ruang', 'App\Http\Controllers\Admin\Profil\KontakController@dokumentasiStore')->name('manajemen-ppid.kontak.dokumentasi.store');
            Route::patch('/kontak/dokumentasi_ruang/update/{id}', 'App\Http\Controllers\Admin\Profil\KontakController@dokumentasiUpdate')->name('manajemen-ppid.kontak.dokumentasi.update');
            Route::post('/kontak/dokumentasi_ruang/delete', 'App\Http\Controllers\Admin\Profil\KontakController@dokumentasiDestroy')->name('manajemen-ppid.kontak.dokumentasi.delete');
        });

        Route::prefix('sosialmedia')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Profil\SosialMediaController@index')->name('manajemen-ppid.sosialmedia.index');
            Route::post('create', 'App\Http\Controllers\Admin\Profil\SosialMediaController@create')->name('manajemen-ppid.sosialmedia.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Profil\SosialMediaController@edit')->name('manajemen-ppid.sosialmedia.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Profil\SosialMediaController@store')->name('manajemen-ppid.sosialmedia.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Profil\SosialMediaController@delete')->name('manajemen-ppid.sosialmedia.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Profil\SosialMediaController@show')->name('manajemen-ppid.sosialmedia.show');
        });

        //Regulasi
        Route::prefix('peraturan_kip')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@index')->name('manajemen-ppid.peraturan_kip.index');
            Route::post('create', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@create')->name('manajemen-ppid.peraturan_kip.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@edit')->name('manajemen-ppid.peraturan_kip.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@store')->name('manajemen-ppid.peraturan_kip.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@destroy')->name('manajemen-ppid.peraturan_kip.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@show')->name('manajemen-ppid.peraturan_kip.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@update')->name('manajemen-ppid.peraturan_kip.update');
            Route::post('/peraturan_kip/regulasi_banner', 'App\Http\Controllers\Admin\Regulasi\PeraturanKIPController@bannerStore')->name('manajemen-ppid.peraturan_kip.banner.store');
        });
        Route::prefix('rancangan_peraturan_kip')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@index')->name('manajemen-ppid.rancangan_peraturan_kip.index');
            Route::post('create', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@create')->name('manajemen-ppid.rancangan_peraturan_kip.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@edit')->name('manajemen-ppid.rancangan_peraturan_kip.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@store')->name('manajemen-ppid.rancangan_peraturan_kip.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@destroy')->name('manajemen-ppid.rancangan_peraturan_kip.delete');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@update')->name('manajemen-ppid.rancangan_peraturan_kip.update');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@show')->name('manajemen-ppid.rancangan_peraturan_kip.show');
            Route::post('/rancangan_peraturan_kip/regulasi_banner', 'App\Http\Controllers\Admin\Regulasi\RancanganPeraturanKIPController@bannerStore')->name('manajemen-ppid.rancangan_peraturan_kip.banner.store');
        });

        //Informasi Publik
        Route::prefix('informasi_secara_berkala')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@index')->name('manajemen-ppid.informasi_secara_berkala.index');
            Route::post('create', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@create')->name('manajemen-ppid.informasi_secara_berkala.create');
            Route::post('edit', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@edit')->name('manajemen-ppid.informasi_secara_berkala.edit');
            Route::post('store', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@store')->name('manajemen-ppid.informasi_secara_berkala.store');
            Route::post('delete', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@destroy')->name('manajemen-ppid.informasi_secara_berkala.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@show')->name('manajemen-ppid.informasi_secara_berkala.show');
            Route::post('/informasi_secara_berkala/banner', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@bannerStore')->name('manajemen-ppid.informasi_secara_berkala.banner.store');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSecaraBerkalaController@update')->name('manajemen-ppid.informasi_secara_berkala.update');
        });

        Route::prefix('informasi_serta_merta')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController@index')->name('manajemen-ppid.informasi_serta_merta.index');
            Route::post('create', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController@create')->name('manajemen-ppid.informasi_serta_merta.create');
            Route::post('edit', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController@edit')->name('manajemen-ppid.informasi_serta_merta.edit');
            Route::post('store', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController@store')->name('manajemen-ppid.informasi_serta_merta.store');
            Route::post('delete', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController@destroy')->name('manajemen-ppid.informasi_serta_merta.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController@show')->name('manajemen-ppid.informasi_serta_merta.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMertaController@update')->name('manajemen-ppid.informasi_serta_merta.update');
        });

        Route::prefix('informasi_setiap_saat')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController@index')->name('manajemen-ppid.informasi_setiap_saat.index');
            Route::post('create', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController@create')->name('manajemen-ppid.informasi_setiap_saat.create');
            Route::post('edit', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController@edit')->name('manajemen-ppid.informasi_setiap_saat.edit');
            Route::post('store', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController@store')->name('manajemen-ppid.informasi_setiap_saat.store');
            Route::post('delete', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController@destroy')->name('manajemen-ppid.informasi_setiap_saat.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController@show')->name('manajemen-ppid.informasi_setiap_saat.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\InformasiPublik\InformasiSetiapSaatController@update')->name('manajemen-ppid.informasi_setiap_saat.update');
        });

        //Laporan
        Route::prefix('laporan_triwulanan')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Laporan\LaporanTriwulananController@index')->name('manajemen-ppid.laporan_triwulanan.index');
            Route::post('create', 'App\Http\Controllers\Admin\Laporan\LaporanTriwulananController@create')->name('manajemen-ppid.laporan_triwulanan.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Laporan\LaporanTriwulananController@edit')->name('manajemen-ppid.laporan_triwulanan.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Laporan\LaporanTriwulananController@store')->name('manajemen-ppid.laporan_triwulanan.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Laporan\LaporanTriwulananController@destroy')->name('manajemen-ppid.laporan_triwulanan.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Laporan\LaporanTriwulananController@show')->name('manajemen-ppid.laporan_triwulanan.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\Laporan\LaporanTriwulananController@update')->name('manajemen-ppid.laporan_triwulanan.update');
        });

        Route::prefix('laporan_tahunan')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Laporan\LaporanTahunanController@index')->name('manajemen-ppid.laporan_tahunan.index');
            Route::post('create', 'App\Http\Controllers\Admin\Laporan\LaporanTahunanController@create')->name('manajemen-ppid.laporan_tahunan.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Laporan\LaporanTahunanController@edit')->name('manajemen-ppid.laporan_tahunan.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Laporan\LaporanTahunanController@store')->name('manajemen-ppid.laporan_tahunan.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Laporan\LaporanTahunanController@destroy')->name('manajemen-ppid.laporan_tahunan.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Laporan\LaporanTahunanController@show')->name('manajemen-ppid.laporan_tahunan.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\Laporan\LaporanTahunanController@update')->name('manajemen-ppid.laporan_tahunan.update');
        });

        Route::prefix('laporan_hasil_survei')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController@index')->name('manajemen-ppid.laporan_hasil_survei.index');
            Route::post('create', 'App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController@create')->name('manajemen-ppid.laporan_hasil_survei.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController@edit')->name('manajemen-ppid.laporan_hasil_survei.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController@store')->name('manajemen-ppid.laporan_hasil_survei.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController@destroy')->name('manajemen-ppid.laporan_hasil_survei.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController@show')->name('manajemen-ppid.laporan_hasil_survei.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\Laporan\LaporanHasilSurveiController@update')->name('manajemen-ppid.laporan_hasil_survei.update');
        });

        Route::prefix('laporan_banner')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\Laporan\LaporanBannerController@index')->name('manajemen-ppid.laporan_banner.index');
            Route::post('create', 'App\Http\Controllers\Admin\Laporan\LaporanBannerController@create')->name('manajemen-ppid.laporan_banner.create');
            Route::post('edit', 'App\Http\Controllers\Admin\Laporan\LaporanBannerController@edit')->name('manajemen-ppid.laporan_banner.edit');
            Route::post('store', 'App\Http\Controllers\Admin\Laporan\LaporanBannerController@store')->name('manajemen-ppid.laporan_banner.store');
            Route::post('delete', 'App\Http\Controllers\Admin\Laporan\LaporanBannerController@delete')->name('manajemen-ppid.laporan_banner.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\Laporan\LaporanBannerController@show')->name('manajemen-ppid.laporan_banner.show');
        });

        //Standar Layanan
        Route::prefix('maklumat')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\StandarLayanan\MaklumatController@index')->name('manajemen-ppid.maklumat.index');
            Route::post('create', 'App\Http\Controllers\Admin\StandarLayanan\MaklumatController@create')->name('manajemen-ppid.maklumat.create');
            Route::post('edit', 'App\Http\Controllers\Admin\StandarLayanan\MaklumatController@edit')->name('manajemen-ppid.maklumat.edit');
            Route::post('store', 'App\Http\Controllers\Admin\StandarLayanan\MaklumatController@store')->name('manajemen-ppid.maklumat.store');
            Route::post('delete', 'App\Http\Controllers\Admin\StandarLayanan\MaklumatController@delete')->name('manajemen-ppid.maklumat.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\StandarLayanan\MaklumatController@show')->name('manajemen-ppid.maklumat.show');
        });

        Route::prefix('prosedurlayanan')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController@index')->name('manajemen-ppid.prosedurlayanan.index');
            Route::post('create', 'App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController@create')->name('manajemen-ppid.prosedurlayanan.create');
            Route::post('edit', 'App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController@edit')->name('manajemen-ppid.prosedurlayanan.edit');
            Route::post('store', 'App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController@store')->name('manajemen-ppid.prosedurlayanan.store');
            Route::post('delete', 'App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController@delete')->name('manajemen-ppid.prosedurlayanan.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController@show')->name('manajemen-ppid.prosedurlayanan.show');
            Route::post('/prosedurlayanan/banner', 'App\Http\Controllers\Admin\StandarLayanan\ProsedurLayananController@bannerStore')->name('manajemen-ppid.prosedurlayanan.banner.store');
        });

        Route::prefix('biayalayanan')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController@index')->name('manajemen-ppid.biayalayanan.index');
            Route::post('create', 'App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController@create')->name('manajemen-ppid.biayalayanan.create');
            Route::post('edit', 'App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController@edit')->name('manajemen-ppid.biayalayanan.edit');
            Route::post('store', 'App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController@store')->name('manajemen-ppid.biayalayanan.store');
            Route::post('delete', 'App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController@delete')->name('manajemen-ppid.biayalayanan.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\StandarLayanan\BiayaLayananController@show')->name('manajemen-ppid.biayalayanan.show');
        });

        //FAQ
        Route::prefix('faq')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\FAQ\FaqController@index')->name('manajemen-ppid.faq.index');
            Route::post('create', 'App\Http\Controllers\Admin\FAQ\FaqController@create')->name('manajemen-ppid.faq.create');
            Route::post('edit', 'App\Http\Controllers\Admin\FAQ\FaqController@edit')->name('manajemen-ppid.faq.edit');
            Route::post('store', 'App\Http\Controllers\Admin\FAQ\FaqController@store')->name('manajemen-ppid.faq.store');
            Route::post('delete', 'App\Http\Controllers\Admin\FAQ\FaqController@destroy')->name('manajemen-ppid.faq.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\FAQ\FaqController@show')->name('manajemen-ppid.faq.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\FAQ\FaqController@update')->name('manajemen-ppid.faq.update');
        });

        Route::prefix('faq_banner')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\FAQ\FaqBannerController@index')->name('manajemen-ppid.faq_banner.index');
            Route::post('create', 'App\Http\Controllers\Admin\FAQ\FaqBannerController@create')->name('manajemen-ppid.faq_banner.create');
            Route::post('edit', 'App\Http\Controllers\Admin\FAQ\FaqBannerController@edit')->name('manajemen-ppid.faq_banner.edit');
            Route::post('store', 'App\Http\Controllers\Admin\FAQ\FaqBannerController@store')->name('manajemen-ppid.faq_banner.store');
            Route::post('delete', 'App\Http\Controllers\Admin\FAQ\FaqBannerController@delete')->name('manajemen-ppid.faq_banner.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\FAQ\FaqBannerController@show')->name('manajemen-ppid.faq_banner.show');
        });
        
        //Layanan PPID, kurang 1 route
        Route::prefix('data_permohonan')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@index')->name('manajemen-ppid.data_permohonan.index');
            Route::post('create', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@create')->name('manajemen-ppid.data_permohonan.create');
            Route::post('edit', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@edit')->name('manajemen-ppid.data_permohonan.edit');
            Route::post('store', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@store')->name('manajemen-ppid.data_permohonan.store');
            Route::post('delete', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@delete')->name('manajemen-ppid.data_permohonan.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@show')->name('manajemen-ppid.data_permohonan.show');
            Route::get('ppid-data-permohonan', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@ppidDataPermohonan')->name('manajemen-ppid.data_permohonan.ppid-data-permohonan');
            Route::get('ppid-data-permohonan-selesai', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@ppidDataPermohonanSelesai')->name('manajemen-ppid.data_permohonan.ppid-data-permohonan-selesai');
            Route::get('ppid-template-reject', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@ppidTemplateReject')->name('manajemen-ppid.data_permohonan.ppid-template-reject');
            Route::post('konfirmasi-data-permohonan', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@submitKonfirmasiPermohonan')->name('manajemen-ppid.data_permohonan.konfirmasi-data-permohonan');
            Route::post('submit-answer-permohonan', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@submitAnswerPermohonan')->name('manajemen-ppid.data_permohonan.submit-answer-permohonan');
            Route::post('submit-forward-permohonan', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@submitForwardPermohonan')->name('manajemen-ppid.data_permohonan.submit-forward-permohonan');
            Route::post('ppid-pendaftar', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@dataPpidPendaftarById')->name('manajemen-ppid.data_permohonan.ppid-pendaftar');
            Route::get('users-penghubung', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@getDaftarUserPenghubung')->name('manajemen-ppid.data_permohonan.users-penghubung');
            Route::get('cetak-data', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@cetakData')->name('manajemen-ppid.data_permohonan.cetak-data');
            Route::get('cetak-data/{id?}', 'App\Http\Controllers\Admin\LayananPPID\DataPermohonanController@cetakDataById')->name('manajemen-ppid.data_permohonan.cetak-data-id');
        });

        Route::prefix('data_keberatan')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@index')->name('manajemen-ppid.data_keberatan.index');
            Route::post('create', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@create')->name('manajemen-ppid.data_keberatan.create');
            Route::post('edit', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@edit')->name('manajemen-ppid.data_keberatan.edit');
            Route::post('store', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@store')->name('manajemen-ppid.data_keberatan.store');
            Route::post('delete', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@delete')->name('manajemen-ppid.data_keberatan.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@show')->name('manajemen-ppid.data_keberatan.show');
            Route::get('ppid-data-keberatan', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@ppidDataKeberatan')->name('manajemen-ppid.data_keberatan.ppid-data-keberatan');
            Route::get('ppid-data-keberatan-selesai', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@ppidDataKeberatanSelesai')->name('manajemen-ppid.data_keberatan.ppid-data-keberatan-selesai');
            Route::post('konfirmasi-data-keberatan', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@submitKonfirmasiKeberatan')->name('manajemen-ppid.data_keberatan.konfirmasi-data-keberatan');
            Route::post('submit-answer-keberatan', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@submitAnswerKeberatan')->name('manajemen-ppid.data_keberatan.submit-answer-keberatan');
            Route::post('konfirmasi-sengketa/{id?}', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@submitKonfirmasiSengketa')->name('manajemen-ppid.data_keberatan.konfirmasi-sengketa');
            Route::post('upload-putusan/{id?}', 'App\Http\Controllers\Admin\LayananPPID\DataKeberatanController@submitPutusan')->name('manajemen-ppid.data_keberatan.upload-putusan');

            // Route::get('/ppid-data-keberatan', [DataKeberatanController::class, 'ppidDataKeberatan']);
            // Route::get('/ppid-data-keberatan-selesai', [DataKeberatanController::class, 'ppidDataKeberatanSelesai']);
            // Route::post('/konfirmasi-data-keberatan', [DataKeberatanController::class, 'submitKonfirmasiKeberatan']);
            // Route::post('/submit-answer-keberatan', [DataKeberatanController::class, 'submitAnswerKeberatan']);
            // Route::post('/konfirmasi-sengketa/{id}', [DataKeberatanController::class, 'submitKonfirmasiSengketa']);
            // Route::post('/upload-putusan/{id}', [DataKeberatanController::class, 'submitPutusan']);
        });

        //Manajemen User
        
        Route::prefix('role_permission')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\ManajemenUser\RolePermissionController@index')->name('manajemen-ppid.role_permission.index');
            Route::get('create', 'App\Http\Controllers\Admin\ManajemenUser\RolePermissionController@create')->name('manajemen-ppid.role_permission.create');
            Route::get('edit/{id?}', 'App\Http\Controllers\Admin\ManajemenUser\RolePermissionController@edit')->name('manajemen-ppid.role_permission.edit');
            Route::post('store', 'App\Http\Controllers\Admin\ManajemenUser\RolePermissionController@store')->name('manajemen-ppid.role_permission.store');
            Route::post('delete', 'App\Http\Controllers\Admin\ManajemenUser\RolePermissionController@destroy')->name('manajemen-ppid.role_permission.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\ManajemenUser\RolePermissionController@show')->name('manajemen-ppid.role_permission.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\ManajemenUser\RolePermissionController@update')->name('manajemen-ppid.role_permission.update');

        });

        Route::prefix('user_admin')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@index')->name('manajemen-ppid.user_admin.index');
            Route::post('create', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@create')->name('manajemen-ppid.user_admin.create');
            Route::post('edit', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@edit')->name('manajemen-ppid.user_admin.edit');
            Route::post('store', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@store')->name('manajemen-ppid.user_admin.store');
            Route::post('delete', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@destroy')->name('manajemen-ppid.user_admin.delete');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@update')->name('manajemen-ppid.user_admin.update');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@show')->name('manajemen-ppid.user_admin.show');
            Route::post('checkuser', 'App\Http\Controllers\Admin\ManajemenUser\UserAdminController@checkuser')->name('manajemen-ppid.user_admin.checkuser');
        });
        
        Route::prefix('user_pemohon')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\ManajemenUser\UserPemohonController@index')->name('manajemen-ppid.user_pemohon.index');
            Route::post('create', 'App\Http\Controllers\Admin\ManajemenUser\UserPemohonController@create')->name('manajemen-ppid.user_pemohon.create');
            Route::post('edit', 'App\Http\Controllers\Admin\ManajemenUser\UserPemohonController@edit')->name('manajemen-ppid.user_pemohon.edit');
            Route::post('store', 'App\Http\Controllers\Admin\ManajemenUser\UserPemohonController@store')->name('manajemen-ppid.user_pemohon.store');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\ManajemenUser\UserPemohonController@update')->name('manajemen-ppid.user_pemohon.update');
            Route::post('delete', 'App\Http\Controllers\Admin\ManajemenUser\UserPemohonController@destroy')->name('manajemen-ppid.user_pemohon.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\ManajemenUser\UserPemohonController@show')->name('manajemen-ppid.user_pemohon.show');
        });

        //Manajemen Home
        Route::prefix('slider')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\ManajemenHome\SliderController@index')->name('manajemen-ppid.slider.index');
            Route::post('create', 'App\Http\Controllers\Admin\ManajemenHome\SliderController@create')->name('manajemen-ppid.slider.create');
            Route::post('edit', 'App\Http\Controllers\Admin\ManajemenHome\SliderController@edit')->name('manajemen-ppid.slider.edit');
            Route::post('store', 'App\Http\Controllers\Admin\ManajemenHome\SliderController@store')->name('manajemen-ppid.slider.store');
            Route::post('delete', 'App\Http\Controllers\Admin\ManajemenHome\SliderController@destroy')->name('manajemen-ppid.slider.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\ManajemenHome\SliderController@show')->name('manajemen-ppid.slider.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\ManajemenHome\SliderController@update')->name('manajemen-ppid.slider.update');
        });

        Route::prefix('informasi')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@index')->name('manajemen-ppid.informasi.index');
            Route::post('create', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@create')->name('manajemen-ppid.informasi.create');
            Route::post('edit', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@edit')->name('manajemen-ppid.informasi.edit');
            Route::post('store', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@store')->name('manajemen-ppid.informasi.store');
            Route::post('delete', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@destroy')->name('manajemen-ppid.informasi.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@show')->name('manajemen-ppid.informasi.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@update')->name('manajemen-ppid.informasi.update');
            Route::post('/informasi/image', 'App\Http\Controllers\Admin\ManajemenHome\InformasiController@imageStore')->name('manajemen-ppid.informasi.image.store');
        });

        Route::prefix('video')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\ManajemenHome\VideoController@index')->name('manajemen-ppid.video.index');
            Route::post('create', 'App\Http\Controllers\Admin\ManajemenHome\VideoController@create')->name('manajemen-ppid.video.create');
            Route::post('edit', 'App\Http\Controllers\Admin\ManajemenHome\VideoController@edit')->name('manajemen-ppid.video.edit');
            Route::post('store', 'App\Http\Controllers\Admin\ManajemenHome\VideoController@store')->name('manajemen-ppid.video.store');
            Route::post('delete', 'App\Http\Controllers\Admin\ManajemenHome\VideoController@destroy')->name('manajemen-ppid.video.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\ManajemenHome\VideoController@show')->name('manajemen-ppid.video.show');
            Route::patch('update/{id?}', 'App\Http\Controllers\Admin\ManajemenHome\VideoController@update')->name('manajemen-ppid.video.update');
        });

        Route::prefix('footer')->group(function(){
            Route::get('index', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@index')->name('manajemen-ppid.footer.index');
            Route::post('create', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@create')->name('manajemen-ppid.footer.create');
            Route::post('edit', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@edit')->name('manajemen-ppid.footer.edit');
            Route::post('store', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@store')->name('manajemen-ppid.footer.store');
            Route::post('delete', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@delete')->name('manajemen-ppid.footer.delete');
            Route::get('show/{id?}', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@show')->name('manajemen-ppid.footer.show');
            Route::post('/footer/sosialmedia', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@sosialmediaStore')->name('manajemen-ppid.footer.sosialmedia.store');
            Route::patch('/footer/sosialmedia/{id}', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@sosialmediaUpdate')->name('manajemen-ppid.footer.sosialmedia.update');
            Route::post('/footer/sosialmedia/delete', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@sosialmediaDestroy')->name('manajemen-ppid.footer.sosialmedia.delete');
            Route::post('/footer/linkapp', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@linkAppStore')->name('manajemen-ppid.footer.linkapp.store');
            Route::patch('/footer/linkapp/{id}', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@linkAppUpdate')->name('manajemen-ppid.footer.linkapp.update');
            Route::post('/footer/linkapp/delete', 'App\Http\Controllers\Admin\ManajemenHome\FooterController@linkAppDestroy')->name('manajemen-ppid.footer.linkapp.delete');
        });

        //Manajemen Menu
        Route::resource('manajemen_menu', MenuController::class);
        Route::post('manajemen_menu/addmainmenu', [MenuController::class, 'addMainMenu'])->name('manajemen-ppid.manajemen_menu.addMainMenu');
        Route::post('manajemen_menu/delete-mainmenu', [MenuController::class, 'deleteMainMenu'])->name('manajemen-ppid.manajemen_menu.deleteMainMenu');
        Route::patch('manajemen_menu/update-mainmenu/{id}', [MenuController::class, 'updateMainMenu'])->name('manajemen-ppid.manajemen_menu.updateMainMenu');

        Route::post('manajemen_menu/addsubmenu/{mainMenuId}', [MenuController::class, 'addSubMenu'])->name('manajemen-ppid.manajemen_menu.addSubMenu');
        Route::post('manajemen_menu/delete-submenu', [MenuController::class, 'deleteSubMenu'])->name('manajemen-ppid.deleteSubMenu');
        Route::patch('manajemen_menu/update-submenu/{id}', [MenuController::class, 'updateSubMenu'])->name('manajemen-ppid.updateSubMenu');
        //Referensi
        Route::resource('setting_kalender', SettingKalenderController::class);

        Route::resource('manajemen_menu', MenuController::class);

        

        //cetak data
        Route::get('/cetak-data', [DataPermohonanController::class, 'cetakData']);
        Route::get('/cetak-data/{id}', [DataPermohonanController::class, 'cetakDataById']);

        //linksurvei
        Route::post('/linksurvei', [DataPermohonanController::class, 'submitLinkSurvei'])->name('linksurvei.store');
        //keberatan
        
    });
=======


//User PPID

// Route::get('admin/', [UserPPIDLoginController::class, 'index'])
//     ->name('admin.home');
Route::get('login', [UserPPIDLoginController::class, 'login'])->middleware('guest:usersppid')->name('userppid.login');
Route::post('/user/login', [UserPPIDLoginController::class, 'handleLogin'])->name('userppid.handleLogin');
Route::post('logout', [UserPPIDLoginController::class, 'logout'])->name('userppid.logout');
Route::get('signup',  [UserPPIDLoginController::class, 'register'])->middleware('guest:usersppid')->name('signup');
Route::post('signup',  [UserPPIDLoginController::class, 'handleRegister'])->name('signup.store');


//User Admin
// Route::get('/', [UserSAminController::class, 'index'])
//     ->name('user.home');
Route::get('/admin/login', [UserAdminAuthController::class, 'login'])->middleware('guest:web')
    ->name('admin.login');
Route::post('/admin/login', [UserAdminAuthController::class, 'handleLogin'])
    ->name('admin.handleLogin');
Route::post('/admin/logout', [UserAdminAuthController::class, 'logout'])
    ->name('admin.logout');
// User

Route::resource('dashboard', DashboardControllerUser::class)->middleware('auth:usersppid');;
//Home
Route::resource('/', HomeController::class);
Route::get('siaranpers/{id}', [SiaranPersController::class, 'show'])->name('siaranpers.show');
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
// Route::get('/laporan', function () {
//     return view('frontend.laporan.laporan');
// })->name('laporan.index');
Route::resource('laporan', LaporanControllerUser::class);


// Route::get('/faq', function () {
//     return view('frontend.faq.faq');
// })->name('faq.index');
Route::resource('faq', FaqControllerUser::class);



// yovi
Route::get('ppid-cara-mendapatkan', [DataPermohonanControllerUser::class, 'ppidCaraMendapatkan']);
Route::get('ppid-cara-memberikan', [DataPermohonanControllerUser::class, 'ppidCaraMemberikan']);
Route::post('submit-data-permohonan', [DataPermohonanControllerUser::class, 'submitPermintaanUser']);
Route::get('ppid-data-permohonan', [DataPermohonanControllerUser::class, 'ppidDataPermohonan']);
Route::get('ppid-data-permohonan-spec/{id}', [DataPermohonanControllerUser::class, 'ppidDataPermohonanSpec']);
Route::get('ppid-jenis-pemohon', [DataPermohonanControllerUser::class, 'ppidJenisPemohon']);
Route::delete('ppid-data-permohonan/{id}', [DataPermohonanControllerUser::class, 'ppidHapusDataPermohonan']);
Route::get('ppid-status-permohonan', [DataPermohonanControllerUser::class, 'ppidStatusPermohonan']);
//keberatan
Route::get('ppid-kategori-keberatan', [DataKeberatanControllerUser::class, 'ppidKategoriKeberatan']);
Route::post('submit-data-keberatan', [DataKeberatanControllerUser::class, 'submitKeberatanUser']);
Route::get('ppid-data-keberatan', [DataKeberatanControllerUser::class, 'ppidDataKeberatan']);
Route::get('ppid-data-keberatan-spec/{id}', [DataKeberatanControllerUser::class, 'ppidDataKeberatanSpec']);
Route::delete('ppid-data-keberatan/{id}', [DataKeberatanControllerUser::class, 'ppidHapusDataKeberatan']);
Route::get('ppid-permohonan-sebelumnya/{id}', [DataKeberatanControllerUser::class, 'ppidDataPermohonanSebelumnya']);
Route::get('ppid-status-keberatan', [DataKeberatanControllerUser::class, 'ppidStatusKeberatan']);

//Admin
Route::get('/admin/login', function () {
    return view('auth.admin-login2');
})->name('admin.login');
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    //Dashboard
    Route::resource('dashboard', DashboardController::class);
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

    //FAQ
    Route::resource('faq', FaqController::class);
    Route::resource('faq_banner', FaqBannerController::class);

    //Layanan PPID, kurang 1 route
    Route::resource('data_permohonan', DataPermohonanController::class);
    Route::resource('data_keberatan', DataKeberatanController::class);

    //Manajemen User
    Route::resource('role_permission', RolePermissionController::class);
    Route::resource('user_admin', UserAdminController::class);
    Route::resource('user_pemohon', UserPemohonController::class);

    //Manajemen Home
    Route::resource('slider', SliderController::class);
    Route::resource('informasi', InformasiController::class);
    Route::post('/informasi/image', [InformasiController::class, 'imageStore'])->name('informasi.image.store');
    Route::resource('video', VideoController::class);
    Route::resource('footer', FooterController::class);
    Route::post('/footer/sosialmedia', [FooterController::class, 'sosialmediaStore'])->name('footer.sosialmedia.store');
    Route::patch('/footer/sosialmedia/{id}', [FooterController::class, 'sosialmediaUpdate'])->name('footer.sosialmedia.update');
    Route::delete('/footer/sosialmedia/delete/{id}', [FooterController::class, 'sosialmediaDestroy'])->name('footer.sosialmedia.delete');

    Route::post('/footer/linkapp', [FooterController::class, 'linkAppStore'])->name('footer.linkapp.store');
    Route::patch('/footer/linkapp/{id}', [FooterController::class, 'linkAppUpdate'])->name('footer.linkapp.update');
    Route::delete('/footer/linkapp/delete/{id}', [FooterController::class, 'linkAppDestroy'])->name('footer.linkapp.delete');

    //Manajemen Menu
    Route::resource('manajemen_menu', MenuController::class);
    Route::post('manajemen_menu/addmainmenu', [MenuController::class, 'addMainMenu'])->name('manajemen_menu.addMainMenu');
    Route::delete('manajemen_menu/delete-mainmenu/{id}', [MenuController::class, 'deleteMainMenu'])->name('manajemen_menu.deleteMainMenu');
    Route::patch('manajemen_menu/update-mainmenu/{id}', [MenuController::class, 'updateMainMenu'])->name('manajemen_menu.updateMainMenu');

    Route::post('manajemen_menu/addsubmenu/{mainMenuId}', [MenuController::class, 'addSubMenu'])->name('manajemen_menu.addSubMenu');
    Route::delete('manajemen_menu/delete-submenu/{id}', [MenuController::class, 'deleteSubMenu'])->name('manajemen_menu.deleteSubMenu');
    Route::patch('manajemen_menu/update-submenu/{id}', [MenuController::class, 'updateSubMenu'])->name('manajemen_menu.updateSubMenu');
    //Referensi
    Route::resource('setting_kalender', SettingKalenderController::class);

    Route::resource('manajemen_menu', MenuController::class);

    //Layanan PPID
    // permohonan
    Route::get('/ppid-data-permohonan', [DataPermohonanController::class, 'ppidDataPermohonan']);
    Route::get('/ppid-data-permohonan-selesai', [DataPermohonanController::class, 'ppidDataPermohonanSelesai']);
    Route::get('/ppid-template-reject', [DataPermohonanController::class, 'ppidTemplateReject']);
    Route::post('/konfirmasi-data-permohonan', [DataPermohonanController::class, 'submitKonfirmasiPermohonan']);
    Route::post('/submit-answer-permohonan', [DataPermohonanController::class, 'submitAnswerPermohonan']);
    Route::post('/submit-forward-permohonan', [DataPermohonanController::class, 'submitForwardPermohonan']);
    Route::get('/ppid-pendaftar/{id}', [DataPermohonanController::class, 'dataPpidPendaftarById']);
    Route::get('/users-penghubung', [DataPermohonanController::class, 'getDaftarUserPenghubung']);

    //keberatan
    Route::get('/ppid-data-keberatan', [DataKeberatanController::class, 'ppidDataKeberatan']);
    Route::get('/ppid-data-keberatan-selesai', [DataKeberatanController::class, 'ppidDataKeberatanSelesai']);
    Route::post('/konfirmasi-data-keberatan', [DataKeberatanController::class, 'submitKonfirmasiKeberatan']);
    Route::post('/submit-answer-keberatan', [DataKeberatanController::class, 'submitAnswerKeberatan']);
>>>>>>> origin/main
});


Route::get('/jadwal-kerja', [DataPermohonanController::class, 'jadwalKerja']);




// Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');
// Route::get('/layout', function () {
//     return view('layout');
// });
