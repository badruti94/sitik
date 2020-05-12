@extends('template.user')
@section('title', 'Ajukan Sub Domain dan Website')
@section('isi')

<div class="container-fluid">
    @if (session('status'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <span class="posisi_web" >.pnc.ac.id</span>

    <div class="form_manual">
        <form action="{{ url('/admin/p_subweb') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_pengaju">Nama Pengaju</label>
                <input type="text" class="form-control" id="nama_pengaju" name="nama_pengaju">
            </div>
            <div class="form-group">
                <label for="admin">Admin</label>
                <input type="text" class="form-control" id="admin" name="admin">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
            <div class="form-group">
                <label for="unit_jurusan">Unit atau Jurusan</label>
                <input type="text" class="form-control" id="unit_jurusan" name="unit_jurusan">
            </div>
            <div class="form-group">
                <label for="nama_domain">Nama Domain</label>
                <input type="text" class="form-control" id="nama_domain" name="nama_domain">
            </div>
            <div class="form-group">
                <label for="surat_pengantar">Surat Pengantar</label>
                <input type="file" class="form-control-file" id="surat_pengantar" name="surat_pengantar">
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>



</div>

@endsection