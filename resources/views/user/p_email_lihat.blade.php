@extends('template.user')
@section('title', 'Email yang Telah Diajukan')
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
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Keperluan</th>
                <th scope="col">Penanggung Jawab</th>
                <th scope="col">No HP</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($p_email as $pem)
            <tr>
                <td scope="row"> {{ $loop->iteration }} </td>
                <td> {{$pem->tgl}} </td>
                <td> {{$pem->nama}} </td>
                <td> {{$pem->email}} </td>
                <td> {{$pem->jabatan}} </td>
                <td> {{$pem->keperluan}} </td>
                <td> {{$pem->penanggung_jawab}} </td>
                <td> {{$pem->no_hp}} </td>
                <td> <span class="btn <?php $btn = $pem->status == 'Selesai'?'btn-success':'btn-danger'; echo $btn; ?>">{{$pem->status}}</span> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection