@extends('template.layout')

@section('content')
    <h2>{{ $title }}</h2>

    @include('template.alert')

    <a href="/mahasiswa/tambah" class="btn btn-primary mb-2">Tambah Mahasiswa</a>

    <div class="mb-2">
        <table class="table table-bordered">
            <tr style="background-color: brown; color: white">
                <td>NIM</td>
                <td>Nama</td>
                <td>Aksi</td>
            </tr>

            @foreach($daftar_mahasiswa as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                    <td>
                        <a href="/mahasiswa/{{ $mahasiswa->id }}" class="btn btn-default">Lihat</a>
                        <a href="/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-success">Ubah</a>
                        <a href="/mahasiswa/{{ $mahasiswa->id }}/remove" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection