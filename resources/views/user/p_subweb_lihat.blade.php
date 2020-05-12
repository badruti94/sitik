@extends('template.user')
@section('title', 'Sub Domain dan Web yang Telah Diajukan')
@section('isi')

<div class="container-fluid">
    @if(session('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    <!-- <a class="btn btn-primary" href="{{ url('/admin/user/create') }}"><i class="fas fa-plus"></i>Tambah User</a> -->
    <br>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Pengaju</th>
                <th scope="col">Admin</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Unit atau Jurusan</th>
                <th scope="col">Nama Domain</th>
                <th scope="col">Surat Pengantar</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($p_subweb as $psw)
            <tr>
                <td scope="row"> {{ $loop->iteration }} </td>
                <td> {{$psw->tgl}} </td>
                <td> {{$psw->nama_pengaju}} </td>
                <td> {{$psw->admin}} </td>
                <td> {{$psw->jabatan}} </td>
                <td> {{$psw->unit_jurusan}} </td>
                <td> {{$psw->nama_domain}} </td>
                <td> {{$psw->surat_pengantar}} </td>
                <td> <span class="btn <?php $btn = $psw->status == 'Selesai'?'btn-success':'btn-danger'; echo $btn; ?>">{{$psw->status}}</span> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection