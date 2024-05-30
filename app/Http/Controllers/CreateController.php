<?php

namespace App\Http\Controllers;
Use App\Models\jenis;
Use App\Models\berita;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Jenis $jenis)
    {
        $types = jenis::all();
        return view('create',['types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $judul_berita = $request->judul_berita;
        $jenis_berita = $request->jenis_berita;
        $judul1 = $request->judul1;
        $isi1 = $request->isi1;
        $user_id = $request->user_id;

        if (empty($judul_berita)) {return response()->json(['error' => '"judul_berita" harus diisi.'], 422);}
        
        if (empty($jenis_berita)) {return response()->json(['error' => '"jenis_berita" harus diisi.'], 422);}
        
        if (empty($judul1)) {return response()->json(['error' => '"judul1" harus diisi.'], 422);}
        
        if (empty($isi1)) {return response()->json(['error' => '"isi1" harus diisi.'], 422);}
        
        if (empty($user_id)) {return response()->json(['error' => '"user_id" harus diisi.'], 422);}

        $validated = $request->validate([
            'judul_berita'  => 'nullable',
            'jenis_berita'  => 'nullable',
            'judul1'        => 'nullable',
            'isi1'          => 'nullable', 
            'judul2'        => 'nullable',
            'isi2'          => 'nullable',
            'judul3'        => 'nullable',
            'isi3'          => 'nullable',
            'user_id'       => 'nullable',
        ]); 

        $berita = Berita::create($validated);
        return response()->json(['message' => "Berita Sudah Ditambahkan!"]);
       
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
