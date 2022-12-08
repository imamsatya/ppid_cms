<?php

use App\Http\Controllers\API\FAQ\FAQBannerController;
use App\Http\Controllers\API\FAQ\FAQController;
use App\Http\Controllers\API\Laporan\LaporanBannerController;
use App\Http\Controllers\API\Laporan\LaporanHasilSurveiController;
use App\Http\Controllers\API\Laporan\LaporanTahunanController;
use App\Http\Controllers\API\Laporan\LaporanTriwulananController;
use App\Http\Controllers\API\ManajemenHome\InformasiController;
use App\Http\Controllers\API\auth\RegisterController;
use App\Http\Controllers\API\InformasiPublik\InformasiBerkalaController;
use App\Http\Controllers\API\InformasiPublik\InformasiPublikController;
use App\Http\Controllers\API\InformasiPublik\InformasiSertaMertaController;
use App\Http\Controllers\API\InformasiPublik\InformasiSetiapSaatController;
use App\Http\Controllers\API\ManajemenHome\InformasiImageController;
use App\Http\Controllers\API\ManajemenHome\SliderController;
use App\Http\Controllers\API\ManajemenHome\VideoController;
use App\Http\Controllers\API\Permohonan\PermohonanController;
use App\Http\Controllers\API\Profil\KontakController;
use App\Http\Controllers\API\Profil\KontakDokumentasiController;
use App\Http\Controllers\API\Profil\LinkAppController;
use App\Http\Controllers\API\Profil\ProfilSingkatController;
use App\Http\Controllers\API\Profil\SosialMediaController;
use App\Http\Controllers\API\Profil\StrukturOrganisasiController;
use App\Http\Controllers\API\Profil\StrukturOrganisasiKananController;
use App\Http\Controllers\API\Profil\StrukturOrganisasiKiriController;
use App\Http\Controllers\API\Profil\TugasFungsiController;
use App\Http\Controllers\API\Profil\VisiMisiController;
use App\Http\Controllers\API\Referensi\SettingKalenderController;
use App\Http\Controllers\API\Regulasi\PeraturanKIPController;
use App\Http\Controllers\API\Regulasi\RancanganPeraturanKIPController;
use App\Http\Controllers\API\Regulasi\RegulasiController;
use App\Http\Controllers\API\StandarLayanan\BiayaLayananController;
use App\Http\Controllers\API\StandarLayanan\MaklumatController;
use App\Http\Controllers\API\StandarLayanan\ProsedurLayananController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me');
});

// LayananPPID
Route::resource('permohonan', PermohonanController::class);

// FAQ
Route::resource('faq', FAQController::class);
Route::resource('faq_banner', FAQBannerController::class);

// Laporan
Route::resource('laporan_banner', LaporanBannerController::class);
Route::resource('laporan_hasil_survei', LaporanHasilSurveiController::class);
Route::resource('laporan_tahunan', LaporanTahunanController::class);
Route::resource('laporan_triwulanan', LaporanTriwulananController::class);

// ManajemenHome
Route::resource('informasi', InformasiController::class);
Route::resource('informasi_image', InformasiImageController::class);
Route::resource('slider', SliderController::class);
Route::resource('video', VideoController::class);

// StandarLayanan
Route::resource('biaya', BiayaLayananController::class);
Route::resource('maklumat', MaklumatController::class);
Route::resource('prosedur', ProsedurLayananController::class);

// Profil
Route::resource('kontaks', KontakController::class);
Route::resource('kontak_dokumentasi', KontakDokumentasiController::class);
Route::resource('profil_singkat', ProfilSingkatController::class);
Route::resource('struktur_organisasi', StrukturOrganisasiController::class);
Route::resource('struktur_organisasi_kiri', StrukturOrganisasiKiriController::class);
Route::resource('struktur_organisasi_kanan', StrukturOrganisasiKananController::class);
Route::resource('tugas_fungsi', TugasFungsiController::class);
Route::resource('visi_misi', VisiMisiController::class);
Route::resource('sosial_media', SosialMediaController::class);
Route::resource('linkapp', LinkAppController::class);

// Referensi
Route::resource('kalender', SettingKalenderController::class);

// Regulasi
Route::resource('peraturan_kip', PeraturanKIPController::class);
Route::resource('rancangan_peraturan', RancanganPeraturanKIPController::class);
Route::resource('regulasi_banner', RegulasiController::class);

// InformasiPublik
Route::resource('informasi_banner', InformasiPublikController::class);
Route::resource('informasi_berkala', InformasiBerkalaController::class);
Route::resource('informasi_serta_merta', InformasiSertaMertaController::class);
Route::resource('informasi_setiap_saat', InformasiSetiapSaatController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
