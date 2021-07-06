@extends('layout/index')
@section('judul','Tambah Peserta')
@section('content')
    <div class="container">
            <form action="pesertaInput/tambah" method="POST">
                @csrf
                <label for="basic-url" class="form-label">Nama Lengkap</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">contoh:josep</span>
                    <input name="nama_lengkap" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="basic-url" class="form-label">Umur</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">contoh:34th</span>
                    <input name="umur" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="basic-url" class="form-label">E-mail</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">contoh:contohp@gmail.com</span>
                    <input name="email" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="basic-url" class="form-label">Gender</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">contoh:Laki-Laki/Perempuan</span>
                    <input name="gender" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="basic-url" class="form-label">Alamat</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">contoh:jl.kurikulum no.xx rt.xx</span>
                    <input name="Alamat" type="textarea" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
                <a class="btn btn-success" href="{{route('peserta')}}" role="button">Kembali</a>
            </form>
    </div>
@endsection