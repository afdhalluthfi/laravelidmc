
@extends('layout/template')
@section('content')
    <div class="container">
            <form action="/koperasi_profil/store" method="POST">
                @csrf
        <label for="basic-url" class="form-label">nama_koperasi</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="nama_koperasi" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengurus_bendahara</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengurus_bendahara" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengurus_masa_jabatan</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengurus_masa_jabatan" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengawas_ketua</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengawas_ketua" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengawas_anggota_1</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengawas_anggota_1" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengawas_anggota_2</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengawas_anggota_2" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengawas_masa_jabatan</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengawas_masa_jabatan" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">manajer</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="manajer" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pemeringkatan_klasifikasi</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pemeringkatan_klasifikasi" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">kesehatan_koperasi_status</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="kesehatan_koperasi_status" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">kesehatan_koperasi_angka</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="kesehatan_koperasi_angka" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">anggota_l</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="anggota_l" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">anggota_p</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="anggota_p" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">anggota_jml</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="anggota_jml" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">anggota_calon</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="anggota_calon" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengurus_l</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengurus_l" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengurus_p</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengurus_p" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengurus_jml</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengurus_jml" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengawas_l</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengawas_l" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengawas_p</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengawas_p" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pengawas_jml</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pengawas_jml" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">karyawan_l</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="karyawan_l" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">karyawan_p</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="karyawan_p" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">karyawan_jml</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="karyawan_jml" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">manajer_l</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="manajer_l" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">manajer_p</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="manajer_p" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">manajer_jml</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="manajer_jml" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">rat_buku</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="rat_buku" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">rat_tanggal</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="rat_tanggal" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">indikator_usaha</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="indikator_usaha" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">modal_luar</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="modal_luar" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">aset</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="aset" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">vol_usaha</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="vol_usaha" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">vol_usaha_lainya</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="vol_usaha_lainya" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">vol_usaha_jml</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="vol_usaha_jml" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">vol_usaha_tahunlalu</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="vol_usaha_tahunlalu" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">shu</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="shu" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pedpt</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pedpt" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">biaya</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="biaya" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_sp</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_sp" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_sw</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_sw" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_khusus</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_khusus" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_cad</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_cad" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_hibah</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_hibah" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_shu_belumdibagi</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_shu_belumdibagi" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_dana_cadlain</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_dana_cadlain" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_modal_penyerta</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_modal_penyerta" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">ms_jumlah</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="ms_jumlah" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pinjaman_sp</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pinjaman_sp" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pinjaman_lainya</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pinjaman_lainya" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">pinjaman_jumlah</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="pinjaman_jumlah" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">jml_dana</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="jml_dana" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">investasi_jangka_panjang</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="investasi_jangka_panjang" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">simpanan_lainya</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="simpanan_lainya" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">simpanan_sukarela</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="simpanan_sukarela" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <label for="basic-url" class="form-label">simpanan_jumlah</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input name="simpanan_jumlah" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <button class="btn btn-success" type="submit">Simpan</button>
        <button class="btn btn-danger" >Kembali</button>
    </form>
    </div>

@endsection