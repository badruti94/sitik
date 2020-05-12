@extends('template.admin')
@section('title', 'Tambah User')
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

    <div class="form_manual">
        <form action="{{ url('/admin/user') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" value="sitik123">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="admin">Admin</option>
                    <option value="unit">Unit</option>
                    <option value="dosen">Dosen</option>

                </select>
            </div>
            <div class="form-group">
                <label for="unit_jurusan">Unit atau Jurusan</label>
                <input type="text" class="form-control" id="unit_jurusan" name="unit_jurusan">
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>


</div>

@endsection