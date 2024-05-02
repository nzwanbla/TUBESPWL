<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        $news = berita::all();

        return view('welcome',['news' => news]);
    }


        // $users = [
        //     [
        //         'name' => 'Alex',
        //         'age' => 30,
        //     ],

        //     [
        //         'name' => 'Bobby',
        //         'age' => 45,
        //     ],
        // ];
        
        // $berita = new berita();
        // $berita->judul_berita = 'judul_berita';
        // $berita->jenis_berita = 'jenis_berita';
        // $berita->judul1 = 'judul paragraf 1';
        // $berita->isi1 = 'isi paragraf 1';
        // $berita->judul2 = 'judul paragraf 2';
        // $berita->isi2 = 'isi paragraf 2';
        // $berita->judul3 = 'judul paragraf 3';
        // $berita->isi3 = 'isi paragraf 3';
        // $berita->save();


        // logic 

}
