@extends('template.layout')

@section('content')
    <h2>Detail Buku</h2>
    
    Nama Buku : {{ $buku->nama_buku }}
    <br>
    <a href="/buku">Kembali</a>
@endsection