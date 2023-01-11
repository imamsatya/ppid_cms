<?php

use Illuminate\Support\Facades\Route;

//Admin
//Dashboard
use App\Http\Controllers\Admin\Dashboard\DashboardController;
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

//Manajemen User
use App\Http\Controllers\Admin\ManajemenUser\RolePermissionController;
use App\Http\Controllers\Admin\ManajemenUser\UserAdminController;
use App\Http\Controllers\Admin\ManajemenUser\UserPemohonController;

//Manajemen Home
use App\Http\Controllers\Admin\ManajemenHome\SliderController;
use App\Http\Controllers\Admin\ManajemenHome\InformasiController;
use App\Http\Controllers\Admin\ManajemenHome\VideoController;
use App\Http\Controllers\Admin\ManajemenHome\FooterController;

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
use App\Http\Controllers\Auth\ForgotPasswordController;




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

Route::get('/tesemail', function () {
    return view('activation');
});

Route::get('/lupa', function () {
    return view('forgot');
});
//User PPID
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
    Route::patch('/kontak/dokumentasi_ruang/update/{id}', [KontakController::class, 'dokumentasiUpdate'])->name('kontak.dokumentasi.update');
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
});


Route::get('/jadwal-kerja', [DataPermohonanController::class, 'jadwalKerja']);




// Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');
// Route::get('/layout', function () {
//     return view('layout');
// });
