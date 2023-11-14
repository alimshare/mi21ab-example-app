<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    
    function buku() {
        return "BukuController fungsi buku()";
    }

    function buku_echo() {
        echo "ini dicetak dari BukuController dan fungsi buku_echo()";
    }

}
