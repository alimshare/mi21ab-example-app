@extends('template.layout')

@section('content')
<div style="width: 50%">
    <h2>Tambah Mahasiswa</h2>

    @csrf

    <input type="hidden" name="id" value="{{ $mahasiswa->id }}">

    NIM
    <input type="text" name="nim" id="nim" class="form-control" value="{{ $mahasiswa->nim }}">

    Nama
    <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}">

    <br>
    
    <a href="/mahasiswa" class="btn btn-default">Kembali</a>

</div>
@endsection

