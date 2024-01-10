<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BukuController extends Controller
{
    
    function buku() {
        $buku       = Buku::all(); // select * from buku

        $data['daftar_buku'] = $buku;
        $data['title']       = 'Buku';

        return view('buku.buku', $data);
    }

    function view($id) {
        $buku = Buku::find($id); // select * from buku where id = $id;
        return view('buku.buku-view', ['buku' => $buku]);
    }

    function hapus($id) {
        $buku = Buku::find($id); // select * from buku where id = $id;
        if (!$buku) {            
            return redirect('/buku')->with('danger', 'Buku tidak ditemukan');
        }

        $buku->delete();
        return redirect('/buku')->with('success', 'Berhasil dihapus');
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
            Session::flash('success', 'Berhasil disimpan');
        } else {
            Session::flash('success', 'Gagal disimpan');
        }

        return redirect('/buku');
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
            return redirect('/buku')->with('success', 'Berhasil disimpan'); # pindah ke halaman /buku : header('location:/buku')
        } else {
            return redirect('/buku')->with('danger', 'Gagal disimpan');;
        }
    }

}
