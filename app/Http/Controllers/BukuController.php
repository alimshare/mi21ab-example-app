<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    
    function buku() {
        $buku       = Buku::all(); // select * from buku
        $mahasiswa  = Mahasiswa::all(); // select * from mahasiswa

        $data['daftar_buku'] = $buku;
        $data['title']       = 'Buku';
        $data['mahasiswa']   = $mahasiswa;

        return view('buku', $data);
    }

    function view($id) {
        $buku = Buku::find($id); // select * from buku where id = $id;
        return view('buku-view', ['buku' => $buku]);
    }

    function hapus($id) {
        $buku = Buku::find($id); // select * from buku where id = $id;
        if (!$buku) {
            echo "Buku tidak ada";
            return;
        }

        $buku->delete();
        echo "Berhasil dihapus. <a href='/buku'>Kembali</a>";
    }

    function buku_echo() {
        echo "ini dicetak dari BukuController dan fungsi buku_echo()";
    }

    function tambah_buku() {
        return view('buku.form');
    }

    function simpan_buku(Request $request) {
        $nama_buku = $request->nama_buku;

        $buku = new Buku;
        $buku->nama_buku = $nama_buku;

        if ($buku->save()) {
            echo "Berhasil simpan buku.";
        } else {
            echo "Gagal simpan buku";
        }

        echo "<br><a href='/buku'>Kembali</a>";
    }

    function edit($id){
        # Ambil data Buku dengan id = $id
        $buku = Buku::find($id); # select * from buku where id = $id;

        # Tampilkan view form edit buku dengan 
        # memberikan data buku yang baru diambil dari database
        return view('buku.edit', compact('buku'));
    }

    function update_buku(Request $request) {
        # Ambil ID
        $id = $request->id;

        # Ambil data dari table buku
        $buku = Buku::find($id);

        # Ubah data 
        $buku->nama_buku = $request->nama_buku;

        # Simpan Data dan Redirect
        if ($buku->save()) {
            return redirect('/buku')->with('message', 'Berhasil disimpan'); # pindah ke halaman /buku : header('location:/buku')
        } else {
            return redirect('/buku')->with('message', 'Gagal disimpan');;
        }
    }

}
