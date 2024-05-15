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
    public function index(Berita $berita)
    {
        $news = berita::all();
        return view('edit',['news' => $news]);
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

        return view('edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('headline', ['news' => berita::find($id)]);
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
        //
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
