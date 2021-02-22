<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function artikel($id){
        return "Halaman artikel dengan ID: ".$id;
    }
}
