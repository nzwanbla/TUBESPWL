<?php

namespace App\Http\Controllers;
Use App\Models\jenis;
Use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        if (empty($judul_berita)) {return response()->json(['error' => '"judul_berita" harus diisi.'], 777);}
        
        if (empty($jenis_berita)) {return response()->json(['error' => '"jenis_berita" harus diisi.'], 778);}
        
        if (empty($judul1)) {return response()->json(['error' => '"judul1" harus diisi.'], 779);}
        
        if (empty($isi1)) {return response()->json(['error' => '"isi1" harus diisi.'], 780);}
        
        $validated = $request->validate([
            'judul_berita'  => 'required',
            'jenis_berita'  => 'required',
            'judul1'        => 'required',
            'isi1'          => 'required', 
            'judul2'        => 'nullable',
            'isi2'          => 'nullable',
            'judul3'        => 'nullable',
            'isi3'          => 'nullable',
            'fileimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($request->hasFile('fileimage')) {
                $file = $request->file('fileimage');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('images', $fileName, 'public'); 
                $validated['fileimage'] = $filePath; 
            }else{
                $validated['fileimage'] = "star-magazine-14.jpg";
            }
            
            $validated['user_id'] = Auth::id();
            $validated['status'] = 'reject';

            Berita::create($validated);
            
            session()->flash('success', 'Berita berhasil disimpan!');

            return redirect()->to('/create');
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
