@extends('template.user')
@section('title', 'Ubah Password')
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
        <form action="{{ url('/user/ubah_password') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="password">Password Baru</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= session('password') ?>">
            </div>

            <button class="btn btn-primary" type="submit">Ubah</button>
        </form>
    </div>


</div>

@endsection