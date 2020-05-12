@extends('template.user')
@section('title', 'Ajukan Email')
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

    <span class="posisi" >@pnc.ac.id</span>

    <div class="form_manual">
        <form action="{{ url('/admin/p_email') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" title="afda">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <input type="text" class="form-control" id="keperluan" name="keperluan">
            </div>
            <div class="form-group">
                <label for="penanggung_jawab">Penanggung Jawab</label>
                <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab">
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp">
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>


</div>

@endsection

@section('skrip')
<script>
    $('#email').keypress(function() {
        //$('#email').val($('#email').val()+"@pnc.ac.id");
    });
</script>
@endsection