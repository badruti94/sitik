@extends('template.admin')
@section('title', 'Pengajuan Email')
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
                <td> {{ tgl_indo($pem->tgl)}} </td>
                <td> {{$pem->nama}} </td>
                <td> {{$pem->email}} </td>
                <td> {{$pem->jabatan}} </td>
                <td> {{$pem->keperluan}} </td>
                <td> {{$pem->penanggung_jawab}} </td>
                <td> {{$pem->no_hp}} </td>
                <td> <a title="Setujui Pengajuan" class="btn <?php $btn = $pem->status == 'Selesai'?'btn-success':'btn-danger'; echo $btn; ?>" href="<?= url('/admin/pengajuan_email_selesai/' . $pem->id_p_email) ?>">{{$pem->status}}</a> </td>
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