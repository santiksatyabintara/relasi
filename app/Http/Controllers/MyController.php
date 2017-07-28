<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orangtuaa;
use App\Anak;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Santika Satya Bintara";
    	return "Nama saya adalah <b>".$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilmodel()
    {
        $ortu = Orangtuaa::all();
        $anak = Anak::all();
        return view('about', compact('ortu','anak'));
    }

    
     
}
