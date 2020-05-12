@extends('template.admin')
@section('title', 'Pengajuan Sub Domain dan Web yang telah Selesai Disetujui')
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
            </tr>
        </thead>
        <tbody>
            @foreach($p_subweb as $psw)
            <tr>
                <td scope="row"> {{ $loop->iteration }} </td>
                <td> {{tgl_indo($psw->tgl)}}  </td>
                <td> {{$psw->nama_pengaju}} </td>
                <td> {{$psw->admin}} </td>
                <td> {{$psw->jabatan}} </td>
                <td> {{$psw->unit_jurusan}} </td>
                <td> {{$psw->nama_domain}} </td>
                <td> <a href="<?= asset('/dok/surat pengantar/' . $psw->surat_pengantar) ?>" download>{{$psw->surat_pengantar}}</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<?php
function tgl_indo($tanggal)
{
    $tgl = substr($tanggal, 8, 2);
    $tahun    = substr($tanggal, 0, 4);
    $bulan = '';
    switch (substr($tanggal, 5, 2)) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
    }

    return $tgl . ' ' . $bulan . ' ' . $tahun;
}


?>

@endsection