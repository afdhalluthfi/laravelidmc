{{-- <?php dd($data)?> --}}
@extends('layout/template')
@section('content')
    <h1>Aku halaman koperasi</h1>


<table class="table">
    <thead>
        <tr>
            <th>nama_koperasi</th>
            <th>pengurus_bendahara</th>
            <th>pengurus_masa_jabatan</th>
            <th>pengawas_ketua</th>
            <th>pengawas_anggota_1</th>
            <th>pengawas_anggota_2</th>
            <th>pengawas_masa_jabatan</th>
            <th>manajer</th>
            <th>pemeringkatan_klasifikasi</th>
            <th>kesehatan_koperasi_status</th>
            <th>kesehatan_koperasi_angka</th>
            <th>anggota_l</th>
            <th>anggota_p</th>
            <th>anggota_jml</th>
            <th>anggota_calon</th>
            <th>pengurus_l</th>
            <th>pengurus_p</th>
            <th>pengurus_jml</th>
            <th>pengawas_l</th>
            <th>pengawas_p</th>
            <th>pengawas_jml</th>
            <th>karyawan_l</th>
            <th>karyawan_p</th>
            <th>karyawan_jml</th>
            <th>manajer_l</th>
            <th>manajer_p</th>
            <th>manajer_jml</th>
            <th>rat_buku</th>
            <th>rat_tanggal</th>
            <th>indikator_usaha</th>
            <th>modal_luar</th>
            <th>aset</th>
            <th>vol_usaha</th>
            <th>vol_usaha_lainya</th>
            <th>vol_usaha_jml</th>
            <th>vol_usaha_tahunlalu</th>
            <th>shu</th>
            <th>pedpt</th>
            <th>biaya</th>
            <th>ms_sp</th>
            <th>ms_sw</th>
            <th>ms_khusus</th>
            <th>ms_cad</th>
            <th>ms_hibah</th>
            <th>ms_shu_belumdibagi</th>
            <th>ms_dana_cadlain</th>
            <th>ms_modal_penyerta</th>
            <th>ms_jumlah</th>
            <th>pinjaman_sp</th>
            <th>pinjaman_lainya</th>
            <th>pinjaman_jumlah</th>
            <th>jml_dana</th>
            <th>investasi_jangka_panjang</th>
            <th>simpanan_lainya</th>
            <th>simpanan_sukarela</th>
            <th>simpanan_jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>
                <p>{{$item->nama_koperasi}}</p>
            </td>
            <td>
                <p>{{$item->pengurus_bendahara}}</p>
            </td>
            <td>
                <p>{{$item->pengurus_masa_jabatan}}</p>
            </td>
            <td>
                <p>{{$item->pengawas_ketua}}</p>
            </td>
            <td>
                <p>{{$item->pengawas_anggota_1}}</p>
            </td>
            <td>
                <p>{{$item->pengawas_anggota_2}}</p>
            </td>
            <td>
                <p>{{$item->pengawas_masa_jabatan}}</p>
            </td>
            <td>
                <p>{{$item->manajer}}</p>
            </td>
            <td>
                <p>{{$item->pemeringkatan_klasifikasi}}</p>
            </td>
            <td>
                <p>{{$item->kesehatan_koperasi_status}}</p>
            </td>
            <td>
                <p>{{$item->kesehatan_koperasi_angka}}</p>
            </td>
            <td>
                <p>{{$item->anggota_l}}</p>
            </td>
            <td>
                <p>{{$item->anggota_p}}</p>
            </td>
            <td>
                <p>{{$item->anggota_jml}}</p>
            </td>
            <td>
                <p>{{$item->anggota_calon}}</p>
            </td>
            <td>
                <p>{{$item->pengurus_l}}</p>
            </td>
            <td>
                <p>{{$item->pengurus_p}}</p>
            </td>
            <td>
                <p>{{$item->pengurus_jml}}</p>
            </td>
            <td>
                <p>{{$item->pengawas_l}}</p>
            </td>
            <td>
                <p>{{$item->pengawas_p}}</p>
            </td>
            <td>
                <p>{{$item->pengawas_jml}}</p>
            </td>
            <td>
                <p>{{$item->karyawan_l}}</p>
            </td>
            <td>
                <p>{{$item->karyawan_p}}</p>
            </td>
            <td>
                <p>{{$item->karyawan_jml}}</p>
            </td>
            <td>
                <p>{{$item->manajer_l}}</p>
            </td>
            <td>
                <p>{{$item->manajer_p}}</p>
            </td>
            <td>
                <p>{{$item->manajer_jml}}</p>
            </td>
            <td>
                <p>{{$item->rat_buku}}</p>
            </td>
            <td>
                <p>{{$item->rat_tanggal}}</p>
            </td>
            <td>
                <p>{{$item->indikator_usaha}}</p>
            </td>
            <td>
                <p>{{$item->modal_luar}}</p>
            </td>
            <td>
                <p>{{$item->aset}}</p>
            </td>
            <td>
                <p>{{$item->vol_usaha}}</p>
            </td>
            <td>
                <p>{{$item->vol_usaha_lainya}}</p>
            </td>
            <td>
                <p>{{$item->vol_usaha_jml}}</p>
            </td>
            <td>
                <p>{{$item->vol_usaha_tahunlalu}}</p>
            </td>
            <td>
                <p>{{$item->shu}}</p>
            </td>
            <td>
                <p>{{$item->pedpt}}</p>
            </td>
            <td>
                <p>{{$item->biaya}}</p>
            </td>
            <td>
                <p>{{$item->ms_sp}}</p>
            </td>
            <td>
                <p>{{$item->ms_sw}}</p>
            </td>
            <td>
                <p>{{$item->ms_khusus}}</p>
            </td>
            <td>
                <p>{{$item->ms_cad}}</p>
            </td>
            <td>
                <p>{{$item->ms_hibah}}</p>
            </td>
            <td>
                <p>{{$item->ms_shu_belumdibagi}}</p>
            </td>
            <td>
                <p>{{$item->ms_dana_cadlain}}</p>
            </td>
            <td>
                <p>{{$item->ms_modal_penyerta}}</p>
            </td>
            <td>
                <p>{{$item->ms_jumlah}}</p>
            </td>
            <td>
                <p>{{$item->pinjaman_sp}}</p>
            </td>
            <td>
                <p>{{$item->pinjaman_lainya}}</p>
            </td>
            <td>
                <p>{{$item->pinjaman_jumlah}}</p>
            </td>
            <td>
                <p>{{$item->jml_dana}}</p>
            </td>
            <td>
                <p>{{$item->investasi_jangka_panjang}}</p>
            </td>
            <td>
                <p>{{$item->simpanan_lainya}}</p>
            </td>
            <td>
                <p>{{$item->simpanan_sukarela}}</p>
            </td>
            <td>
                <p>{{$item->simpanan_jumlah}}</p>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection















































































































