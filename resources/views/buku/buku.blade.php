@extends('template.layout')

@section('content')
    <h2>{{ $title }}</h2>
	
	@include('template.alert')

    <a href="/buku/tambah" class="btn btn-primary mb-2">Tambah Buku</a>

    <div class="mb-2">
        <table class="table table-bordered">
            <tr style="background-color: brown; color: white">
                <td>Nama Buku</td>
                <td>Aksi</td>
            </tr>

            @foreach($daftar_buku as $buku)
                <tr>
                    <td>{{ $buku->nama_buku }}</td>
                    <td>
                        <a href="/buku/{{ $buku->id }}" class="btn btn-default">Lihat</a>
                        <a href="/buku/{{ $buku->id }}/edit" class="btn btn-success">Ubah</a>
                        <a href="/buku/{{ $buku->id }}/remove" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection