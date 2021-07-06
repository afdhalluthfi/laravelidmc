<?php

namespace App\Http\Controllers;

use App\Models\koperasi_profil as ModelsKoperasi_profil;
use Illuminate\Http\Request;

class koperasi_profil extends Controller
{
    //
    public function index(){
        $data = ModelsKoperasi_profil::all();
        return view('koperasi',compact('data'));
    }

    public function input()
    {
        return view('koperasiInput');
    }
    public function store(Request $request)
    {
        echo $request->nama_koperasi . "<br>";
        echo $request->pengurus_bendahara . "<br>";
        echo $request->pengurus_masa_jabatan . "<br>";
        echo $request->pengawas_ketua . "<br>";
        echo $request->pengawas_anggota_1 . "<br>";
        echo $request->pengawas_anggota_2 . "<br>";
        echo $request->pengawas_masa_jabatan . "<br>";
        echo $request->manajer . "<br>";
        echo $request->pemeringkatan_klasifikasi . "<br>";
        echo $request->kesehatan_koperasi_status . "<br>";
        echo $request->kesehatan_koperasi_angka . "<br>";
        echo $request->anggota_l . "<br>";
        echo $request->anggota_p . "<br>";
        echo $request->anggota_jml . "<br>";
        echo $request->anggota_calon . "<br>";
        echo $request->pengurus_l . "<br>";
        echo $request->pengurus_p . "<br>";
        echo $request->pengurus_jml . "<br>";
        echo $request->pengawas_l . "<br>";
        echo $request->pengawas_p . "<br>";
        echo $request->pengawas_jml . "<br>";
        echo $request->karyawan_l . "<br>";
        echo $request->karyawan_p . "<br>";
        echo $request->karyawan_jml . "<br>";
        echo $request->manajer_l . "<br>";
        echo $request->manajer_p . "<br>";
        echo $request->manajer_jml . "<br>";
        echo $request->rat_buku . "<br>";
        echo $request->rat_tanggal . "<br>";
        echo $request->indikator_usaha . "<br>";
        echo $request->modal_luar . "<br>";
        echo $request->aset . "<br>";
        echo $request->vol_usaha . "<br>";
        echo $request->vol_usaha_lainya . "<br>";
        echo $request->vol_usaha_jml . "<br>";
        echo $request->vol_usaha_tahunlalu . "<br>";
        echo $request->shu . "<br>";
        echo $request->pedpt . "<br>";
        echo $request->biaya . "<br>";
        echo $request->ms_sp . "<br>";
        echo $request->ms_sw . "<br>";
        echo $request->ms_khusus . "<br>";
        echo $request->ms_cad . "<br>";
        echo $request->ms_hibah . "<br>";
        echo $request->ms_shu_belumdibagi . "<br>";
        echo $request->ms_dana_cadlain . "<br>";
        echo $request->ms_modal_penyerta . "<br>";
        echo $request->ms_jumlah . "<br>";
        echo $request->pinjaman_sp . "<br>";
        echo $request->pinjaman_lainya . "<br>";
        echo $request->pinjaman_jumlah . "<br>";
        echo $request->jml_dana . "<br>";
        echo $request->investasi_jangka_panjang . "<br>";
        echo $request->simpanan_lainya . "<br>";
        echo $request->simpanan_sukarela . "<br>";
        echo $request->simpanan_jumlah . "<br>";
    }
}
