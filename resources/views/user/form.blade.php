@extends('template.layout')

@section('content')
    <form method="POST" action="/user/simpan" style="width: 500px">
        <h2>Tambah User</h2>

        @csrf

        Nama
        <input type="text" name="name" id="name" class="form-control">
        <br>

        Email
        <input type="email" name="email" id="email" class="form-control">
        <br>

        Password
        <input type="password" name="password" id="password" class="form-control">
        <br>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/user" class="btn btn-default">Kembali</a>

    </form>
@endsection

