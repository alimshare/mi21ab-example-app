@extends('template.layout')

@section('content')
    <form method="POST" action="/mahasiswa/update" style="width: 500px">
        <h2>Tambah Mahasiswa</h2>

        @csrf

        <input type="hidden" name="id" value="{{ $mahasiswa->id }}">

        NIM
        <input type="text" name="nim" id="nim" class="form-control" value="{{ $mahasiswa->nim }}">

        Nama
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}">

        <br>

        <button type="submit" class="btn btn-primary">Ubah</button>
        <a href="/mahasiswa" class="btn btn-default">Kembali</a>

    </form>
@endsection

