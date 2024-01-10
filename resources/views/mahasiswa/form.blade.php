@extends('template.layout')

@section('content')
    <form method="POST" action="/mahasiswa/simpan" style="width: 500px">
        <h2>Tambah Mahasiswa</h2>

        @csrf

        NIM
        <input type="text" name="nim" id="nim" class="form-control">

        Nama
        <input type="text" name="nama" id="nama" class="form-control">

        <br>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/mahasiswa" class="btn btn-default">Kembali</a>

    </form>
@endsection

