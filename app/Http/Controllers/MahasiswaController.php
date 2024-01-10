<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Exception;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    function daftar_mahasiswa() {
        $mahasiswa = Mahasiswa::all(); // select * from mahasiswa

        $data['daftar_mahasiswa'] = $mahasiswa;
        $data['title']            = 'Mahasiswa';

        return view('mahasiswa.list', $data);
    }

    function tambah() {
        return view('mahasiswa.form');
    }

    function simpan(Request $request) {
        $nim    = $request->nim;
        $nama   = $request->nama;

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $nim;
        $mahasiswa->nama_mahasiswa = $nama;

        try {

            if ($mahasiswa->save()) {
                Session::flash('success', 'Berhasil simpan buku');
            } else {
                Session::flash('danger', 'Gagal simpan buku');
            }

        } catch (Exception $e) {
            Session::flash('danger', 'Gagal simpan buku');
        }

        return redirect('/mahasiswa');
    }

    function hapus($id) {
        $mahasiswa = Mahasiswa::where('id', $id)->first(); // select * from mahasiswa where id = $id;

        if (!$mahasiswa) {
            Session::flash('danger', 'Mahasiswa tidak ditemukan');
            return redirect('/mahasiswa');
        }

        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil dihapus');
    }

    function edit($id){
        $mahasiswa = Mahasiswa::where('id', $id)->first(); // select * from mahasiswa where id = $id;

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    function update(Request $request) {
        # Ambil ID
        $id = $request->id;

        # Ambil data dari table mahasiswa
        $mahasiswa = Mahasiswa::where('id', $id)->first(); // select * from mahasiswa where id = $id;

        # Ubah data 
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_mahasiswa = $request->nama;

        # Simpan Data dan Redirect
        if ($mahasiswa->save()) {
            return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil diubah'); 
        } else {
            return redirect('/mahasiswa')->with('danger', 'Mahasiswa Gagal diubah');;
        }
    }

    function view($id) {
        $mahasiswa = Mahasiswa::where('id', $id)->first(); // select * from mahasiswa where id = $id;

        return view('mahasiswa.view', compact('mahasiswa'));
    }
}
