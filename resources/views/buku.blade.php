<h2>{{ $title }}</h2>

<a href="/buku/tambah">Tambah Buku</a>

@if(!empty($message))
    {{ $message }}
@endif

<ul>
    @foreach($daftar_buku as $buku)
        <li>
            <a href="/buku/{{ $buku->id }}">{{ $buku->nama_buku }}</a> ---  
            <a href="/buku/{{ $buku->id }}/edit">Ubah</a> | 
            <a href="/buku/{{ $buku->id }}/remove">Hapus</a>
        </li>
    @endforeach
</ul>

<h2>Daftar Mahasiswa</h2>
<ul>
    @foreach($mahasiswa as $m)
        <li>
            {{ $m->nama }}
        </li>
    @endforeach
</ul>