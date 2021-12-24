<?php
use App\Http\Controllers\{CovidContorller, DisnakerContorller, KependudukanContorller, koperasi_profil,
    KoperasiController,PetahananContorller,PrajawibawaContorller,profileController,SimangkisContorller,
    SimpegController,TataruangContorller};
use App\Http\Controllers\MailController;
use App\Http\Controllers\peserta;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bina_data;
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
    return view('koperasi');
});

Route::get('bina_data',[bina_data::class,'index']);
Route::get('koperasi_profil',[koperasi_profil::class,'index']);
Route::get('koperasi_profil/input',[koperasi_profil::class,'input']);
Route::post('koperasi_profil/store', [koperasi_profil::class,'store']);

Route::get('peserta',[peserta::class,'index'])->name('peserta');
Route::get('pesertaInput',[peserta::class,'tambahpage'])->name('form');
Route::post('pesertaInput/tambah',[peserta::class, 'insertPeserta']);
Route::delete('peserta/{id}',[peserta::class,'destroy'])->name('hapus');
Route::delete('peserta-delete',[peserta::class,'deletAll'])->name('hapussemua');


Route::get('email-send',[MailController::class,'senemail'])->name('kirimemail');

Route::get('profile',[profileController::class,'index'])->name('profile');
// diskop
Route::group(['prefix' => 'diskop-ukm'], function () {
    Route::get('koperasi',[KoperasiController::class,'index'])->name('disokop.koperasi');
    Route::get('ukm', [KoperasiController::class, 'index'])->name('disokop.ukm');
});
//simpeg
Route::group(['prefix' => 'simpeg'], function () {
    
    Route::get('golongan', [SimpegController::class,'index'])->name('simpeg.golongan');
    Route::get('umur', [SimpegController::class,'index'])->name('simpeg.umur');
    Route::get('sppd', [SimpegController::class,'index'])->name('simpeg.sppd');
    Route::get('pendidikan',[SimpegController::class,'index'])->name('simpeg.pendidikan');
    Route::get('eselon', [SimpegController::class,'index'])->name('simpeg.eselon');
    Route::get('absem', [SimpegController::class,'index'])->name('simpeg.absen');
    Route::get('pensiun', [SimpegController::class,'index'])->name('simpeg.pensiun');
});
// kependudukan
Route::group(['prefix' => 'kependudukan'], function () {
    Route::get('jenis-kelamin',[KependudukanContorller::class,'index'])->name('kependudukan.jenis');
    Route::get('agama',[KependudukanContorller::class,'index'])->name('kependudukan.agama');
    Route::get('golongan-darah',[KependudukanContorller::class,'index'])->name('kependudukan.darah');
    Route::get('perkawinan',[KependudukanContorller::class,'index'])->name('kependudukan.perkawinan');
    Route::get('pekerjaan',[KependudukanContorller::class,'index'])->name('kependudukan.pekerjaan');
    Route::get('pendidikan',[KependudukanContorller::class,'index'])->name('kependudukan.pendidikan');
});
// e-lapor
Route::group(['prefix' => 'e-lapor'], function () {
    Route::get('kategori',[ElaporController::class,'index'])->name('elapor.kategori');
    Route::get('skpd',[ElaporController::class,'index'])->name('elapor.skpd');
    Route::get('kabupaten',[ElaporController::class,'index'])->name('elapor.kabupaten');
    Route::get('lokasi',[ElaporController::class,'index'])->name('elapor.lokasi');
});
// survilance
Route::group(['prefix' => 'survilance'], function () {
    Route::get('atcs',[SurvilanceController::class,'index'])->name('survilance.atcs');
    Route::get('atcs-kota',[SurvilanceController::class,'index'])->name('survilance.kota');
    Route::get('cctv-bantul',[SurvilanceController::class,'index'])->name('survilance.bantul');
    Route::get('cctv-kp',[SurvilanceController::class,'index'])->name('survilance.kp');
    Route::get('cctv-public',[SurvilanceController::class,'index'])->name('survilance.public');
    Route::get('cctv-sleman',[SurvilanceController::class,'index'])->name('survilance.sleman');
    Route::get('cctv-sungai',[SurvilanceController::class,'index'])->name('survilance.sungai');
    Route::get('cctv-uptmalioboro',[SurvilanceController::class,'index'])->name('survilance.malioboro');
});
//pertanahan
Route::group(['prefix' => 'pertanahan'], function () {
    Route::get('pertanahan',[PetahananContorller::class,'index'])->name('pertahanan');
});
//tataruang
Route::group(['prefix' => 'tataruang'], function () {
    Route::get('pola-ruang',[TataruangContorller::class,'index'])->name('tataruang.pola');
    Route::get('struktur-ruang',[TataruangContorller::class,'index'])->name('tataruang.ruang');
    Route::get('strategi-provinsi',[TataruangContorller::class,'index'])->name('tataruang.provinsi');
});
//simangkis
Route::group(['prefix' => 'simangkis'], function () {
    Route::get('air-minum',[SimangkisContorller::class,'index'])->name('simangkis.minum');
    Route::get('bab',[SimangkisContorller::class,'index'])->name('simangkis.bab');
    Route::get('bahan-masak',[SimangkisContorller::class,'index'])->name('simangkis.masak');
    Route::get('listrik',[SimangkisContorller::class,'index'])->name('simangkis.listrik');
    Route::get('disabilitas',[SimangkisContorller::class,'index'])->name('simangkis.disabilitas');
    Route::get('ijazah',[SimangkisContorller::class,'index'])->name('simangkis.ijazah');
    Route::get('jenis-dinding',[SimangkisContorller::class,'index'])->name('simangkis.jenis');
    Route::get('kepimilikan',[SimangkisContorller::class,'index'])->name('simangkis.kepimilikan');
    Route::get('kesataraan',[SimangkisContorller::class,'index'])->name('simangkis.kesataraan');
    Route::get('pekerjaan',[SimangkisContorller::class,'index'])->name('simangkis.pekerjaan');
    Route::get('pendidikan',[SimangkisContorller::class,'index'])->name('simangkis.pendidikan');
    Route::get('pekerjaan',[SimangkisContorller::class,'index'])->name('simangkis.pekerjaan');
    Route::get('penyakit-kronis',[SimangkisContorller::class,'index'])->name('simangkis.kronis');
    Route::get('perkawinan',[SimangkisContorller::class,'index'])->name('simangkis.perekawinan');
    Route::get('sumber-penerangan',[SimangkisContorller::class,'index'])->name('simangkis.penerangan');
});
// covid
Route::group(['prefix' => 'covid'], function () {
    Route::get('sebaran-covid',[CovidContorller::class,'index'])->name('covid.sebaran');
    Route::get('statistik-covid',[CovidContorller::class,'index'])->name('covid.statistik');
    Route::get('info-rumahsakit',[CovidContorller::class,'index'])->name('covid.rumahsakit');
    Route::get('info-vaksin',[CovidContorller::class,'index'])->name('covid.vaksin');
});
// prajawibawa
Route::group(['prefix' => 'prajawibawa'], function () {
    Route::get('ketertiban',[PrajawibawaContorller::class,'index'])->name('prajawibawa.ketertiban');
    Route::get('pengamanan',[PrajawibawaContorller::class,'index'])->name('prajawibawa.pengamanan');
    Route::get('pertolongan',[PrajawibawaContorller::class,'index'])->name('prajawibawa.pertolongan');
    Route::get('perda',[PrajawibawaContorller::class,'index'])->name('prajawibawa.perda');
});
// disnaker
Route::group(['prefix' => 'disnaker'], function () {
    Route::get('angkatan-kerja',[DisnakerContorller::class,'index'])->name('disnaker.angkatan');
    Route::get('usia-kerja',[DisnakerContorller::class,'index'])->name('disnaker.usia');
    Route::get('penganggur',[DisnakerContorller::class,'index'])->name('disnaker.penganggur');
    Route::get('migran',[DisnakerContorller::class,'index'])->name('disnaker.migran');
    Route::get('transmigrasi',[DisnakerContorller::class,'index'])->name('disnaker.transmigrasi');
});


/* ==== Route Use Data RestApi ==== */
