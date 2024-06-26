<?php

namespace App\Http\Controllers;
Use App\Models\berita;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('editor');
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

        return view('editor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
