<?php

namespace App\Http\Controllers;
Use App\Models\berita;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = berita::all();
        // $selectedNews = berita::where('judul_berita', $request->judul_berita)->first();
        
        return view('edit', ['news' => $news, 'selectedNews' => $selectedNews]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_berita'  => 'required',
            'jenis_berita'  => 'required',
            'judul1'        => 'required',
            'isi1'          => 'required',
            'judul2'        => 'nullable',
            'isi2'          => 'nullable',
            'judul3'        => 'nullable',
            'isi3'          => 'nullable',
        ]); 

        $berita = Berita::create($validated);
        $news = berita::all();

        return view('edit', ['news' => $news]);
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('edit', ['selectedNews' => berita::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul_berita'  => 'required',
            'jenis_berita'  => 'required',
            'judul1'        => 'required',
            'isi1'          => 'required',
            'judul2'        => 'nullable',
            'isi2'          => 'nullable',
            'judul3'        => 'nullable',
            'isi3'          => 'nullable',
        ]);

        $beritaDipilih = berita::findOrFail($id);  
        $beritaDipilih->update($validatedData);
        return route('search.show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return berita::destroy($id);
    }
}
