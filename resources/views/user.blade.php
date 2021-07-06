@extends('layout/template')
@section('content')
    <h5>Halaman User</h5>
    <note>Data Ini Diambil dengan metode Http Client Biasanya Digunakan untuk fetch data RestApi</note>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)    
                    <tr>
                        <td><img src="{{$item['avatar']}}" alt=""></td>
                        <td>{{$item['first_name']}}</td>
                        <td>{{$item['last_name']}}</td>
                        <td>{{$item['email']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection