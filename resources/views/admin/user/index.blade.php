@extends('template.admin')
@section('title', 'Kelola User')
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


    <a class="btn btn-primary" href="{{ url('/admin/user/create') }}"><i class="fas fa-plus"></i>Tambah User</a>
    <br>
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Unit atau Jurusan</th>
                <th scope="col" colspan="2" class="text text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $usr)
            <tr>
                <td scope="row"> {{ $loop->iteration }} </td>
                <td> {{$usr->username}} </td>
                <td> {{$usr->password}} </td>
                <td> {{$usr->nama}} </td>
                <td> {{$usr->status}} </td>
                <td> {{$usr->unit_jurusan}} </td>
                <td class="text text-center"><a class="btn btn-warning btn-sm" href="{{url('/admin/user/' . $usr->id_user . '/edit')}}"><i class="fas fa-edit"></i></a></td>
                <td class="text text-center">
                    <form action="{{ url('/admin/user/' . $usr->id_user ) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Data akan dihapus?');" type="submit"><i class=" fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection