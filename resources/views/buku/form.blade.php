@extends('template.layout')

@section('content')
    <form method="POST" action="/buku/tambah">
        <h2>Tambah Buku</h2>

        @csrf

        Nama Buku
        <input type="text" name="nama_buku" id="nama">

        <br><br>

        <button type="submit">Simpan</button>
        <a href="/buku">Kembali</a>

    </form>
@endsection

