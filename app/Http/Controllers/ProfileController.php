<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $nama ="Rian Kurniawan";
        $nim = "21030085";
        $tanggal_lahir = "3 July 2001";

        $data_array = array();
        
        
        return view('profile', compact('nama', 'nim', 'tanggal_lahir','data_array')
    );
        
    }
}
