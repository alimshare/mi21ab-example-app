@extends('template.layout')

@section('content')
    <h2>{{ $title }}</h2>

    <a href="/buku/tambah" class="btn btn-primary mb-2">Tambah Buku</a>

    @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-dismissible ">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		  <strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($message = Session::get('error'))
	  <div class="alert alert-danger alert-dismissible ">
	    <button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($message = Session::get('warning'))
	  <div class="alert alert-warning alert-dismissible ">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	</div>
	@endif

	@if ($message = Session::get('info'))
	  <div class="alert alert-info alert-dismissible ">
	    <button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message }}</strong>
	  </div>
	@endif

	@if ($errors->any())
	  <div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		Please check the form below for errors
	</div>
	@endif

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