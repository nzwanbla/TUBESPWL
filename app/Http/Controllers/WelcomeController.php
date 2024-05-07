<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function welcome(Berita $berita)
    {
        $news = berita::all();

        return view('headline',['news' => $news]);
    }

    public function index()
    {
        return berita::all();
    }
 
    public function show($id)
    {
        return view('welcome', ['news' => berita::find($id)]);
    }

    public function store(Request $request)
    {
        return berita::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $berita = berita::findOrFail($id);
        $berita->update($request->all());

        return $berita;
    }

    public function delete(Request $request, $id)
    {
        $berita = berita::findOrFail($id);
        $berita->delete();

        return 204;
    }
}
