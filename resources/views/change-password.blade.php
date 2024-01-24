@extends('template.layout')

@section('content')
    <h2>Ganti Password</h2>
    
    @include('template.alert')

    <form method="POST" action="/change-password" style="width: 500px">

        @csrf

        Password Lama
        <input type="password" name="old_password" id="old_password" class="form-control">
        <br>

        Password Baru
        <input type="password" name="new_password" id="new_password" class="form-control">
        <br>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/" class="btn btn-default">Kembali</a>

    </form>
@endsection