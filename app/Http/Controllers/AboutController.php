<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        //praktikum2
        //return '1941720067_Khosy Robbin Hood';

        //praktikum3
        return redirect('https://www.educastudio.com/about-us');
    }
}
