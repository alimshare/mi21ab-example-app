<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
    function index(){
        $user = User::all(); // select * from mahasiswa

        $data['daftar_pengguna']  = $user;
        $data['title']            = 'User';

        return view('user.list', $data);
    }

    function tambah(){
        return view('user.form');
    }

    function simpan(Request $request) {

        $name     = $request->name;
        $email    = $request->email;
        $password = $request->password;

        $user = new User();
        $user->name     = $name;
        $user->email    = $email;
        $user->password = Hash::make($password);

        try {

            if ($user->save()) {
                Session::flash('success', 'Berhasil simpan user');
            } else {
                Session::flash('danger', 'Gagal simpan user');
            }

        } catch (Exception $e) {
            Session::flash('danger', 'Gagal simpan user');
        }

        return redirect('/user');
    }

    function resetPassword($id) {
        // temukan User dengan ID yang dimaksud
        $user = User::where('id', $id)->first();
        if (!$user) {
            return redirect('/user')->with('danger', 'User tidak ditemukan');
        }

        // Rubah password sesuai default password
        $user->password = Hash::make("123456");
        $user->save();

        return redirect('/user')->with('success', 'Reset Password berhasil');

    }

    function changePassword(){
        return view('change-password');
    }

    function postChangePassword(Request $request){
        $user = $request->user(); // model dari user yang sedang login

        # cek apakah password lama yang diinput cocok dengan yang di database
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect('/change-password')->with('danger', 'Password Lama tidak sesuai');
        }

        # ubah password
        $user->password = Hash::make($request->new_password);
        $user->save();

        # kembali ke halaman sebelumnya
        return redirect('/change-password')->with('success', 'Password berhasil diubah');
    }

}
