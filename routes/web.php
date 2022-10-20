<?php

use Illuminate\Support\Facades\Route;

//Profil
use App\Http\Controllers\Profil\VisiMisiController;
use App\Http\Controllers\Profil\ProfilSingkatController;
use App\Http\Controllers\Profil\TugasDanFungsiController;
use App\Http\Controllers\Profil\StrukturOrganisasiController;
use App\Http\Controllers\Profil\KontakController;
use App\Http\Controllers\Profil\SosialMediaController;

//Regulasi
use App\Http\Controllers\Regulasi\PeraturanKIPController;
use App\Http\Controllers\Regulasi\RancanganPeraturanKIPController;

//Informasi Publik
use App\Http\Controllers\InformasiPublik\InformasiSecaraBerkalaController;

//Layanan PPID
use App\Http\Controllers\LayananPPID\DataPermohonanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visidanmisi', function () {
    return view('profil.visidanmisi');
});



// Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');

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


// Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi.index');
Route::get('/layout', function () {
    return view('layout');
});
