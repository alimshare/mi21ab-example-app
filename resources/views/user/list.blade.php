@extends('template.layout')

@section('content')
    <h2>{{ $title }}</h2>

    @include('template.alert')

    <a href="/user/tambah" class="btn btn-primary mb-2">Tambah User</a>

    <div class="mb-2">
        <table class="table table-bordered">
            <tr style="background-color: brown; color: white">
                <td>Email</td>
                <td>Nama</td>
                <td>Aksi</td>
            </tr>

            @foreach($daftar_pengguna as $user)
                <tr>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        {{-- <a href="/user/{{ $user->id }}" class="btn btn-default">Lihat</a> --}}
                        {{-- <a href="/user/{{ $user->id }}/edit" class="btn btn-success">Ubah</a> --}}
                        {{-- <a href="/user/{{ $user->id }}/remove" class="btn btn-danger">Hapus</a> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection