<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    function profile() {
        return view('profil.profil'); # letak file /resources/views/profil/profil.blade.php
    }

}
