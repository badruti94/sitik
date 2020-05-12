@extends('template.admin')
@section('title', 'Edit User')
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

    <form action="{{ url('/admin/user/' . $user->id_user) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user->username ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?= $user->password ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user->nama ?>">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="<?= $user->status ?>">
        </div>
        <div class="form-group">
            <label for="unit_jurusan">Unit atau Jurusan</label>
            <input type="text" class="form-control" id="unit_jurusan" name="unit_jurusan" value="<?= $user->unit_jurusan ?>">
        </div>

        <button class="btn btn-primary" type="submit">Edit</button>
    </form>

</div>

@endsection