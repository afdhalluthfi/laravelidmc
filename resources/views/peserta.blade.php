@extends('layout/index')
@section('judul','Peserta')
@section('content')
   <div class="container">
       
    <a class="btn btn-primary" role="button" href="{{route('form')}}">Peserta</a>
    <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ route('hapussemua') }}">Hapus</button>
    <table id="example1" class="table table-bordered table-hover"> 
            <thead>
                <tr>
                    <th><input type="checkbox"  id="master"></th>
                    <th>Nama Lengkap</th>
                    <th>Umur</th>
                    <th>E-Mail</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td><input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></td>
                        <td><?= $item->nama_lengkap;?></td>
                        <td><?= $item->umur;?></td>
                        <td><?= $item->email;?></td>
                        <td><?= $item->gender;?></td>
                        <td><?= $item->alamat;?></td>
                        <td><button class="btn btn-success">Edit</button>
                            <a class="btn btn-danger sweet-confirm" href="#" role="button" data-id="{{$item->id}}" data-nama="{{$item->nama_lengkap}}" >
                                <form id="delet{{$item->id}}" action="{{route('hapus',$item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                                Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
  </div>
@endsection
@push('scrip-alert')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@push('table-js')
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
@push('sweet-alert')
    <script>
        $('.sweet-confirm').click(function(e){
            let id =e.target.dataset.id;
            let nama =e.target.dataset.nama;
            Swal.fire({
                title: 'Apa Kamu Yakin Mau Menghapus Data Dengan Nama :'+nama +' ?',
                text: "Data Yang Akan Di Hapus Tidak Bisa Di Kembalikan 😉",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus !'
                }).then((result) => {
                    
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Terhapus!',
                            'Yay Data Anda Sudah Di Hapus 🎉.',
                            'Berhasil'
                        )
                        $(`#delet${id}`).submit()
                    }
                })
        });

        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });
    </script>
@endpush
