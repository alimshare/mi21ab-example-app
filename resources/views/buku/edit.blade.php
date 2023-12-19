@extends('template.layout')

@section('content')
<form method="POST" action="/buku/update">
    <h2>Edit Buku</h2>

    @csrf
    <input type="hidden" name="id" value="{{ $buku->id }}">

    Nama Buku
    <input type="text" name="nama_buku" id="nama" value="{{ $buku->nama_buku }}">

    <br><br>

    <button type="submit">Simpan</button>
    <a href="/buku">Kembali</a>

</form>
@endsection

