<?php

namespace App\Http\Controllers;
use App\Models\berita;
use Illuminate\Http\Request;
Use App\Models\User;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    public function storeKomentar(Request $request, $id)
{
    $validatedData = $request->validate([
        'isi_komentar' => 'required|string',
    ]);

    $validatedData['tanggal'] = now(); 
    $validatedData['username'] = Auth::user()->name;; 
    $validatedData['post_id'] = $id; 
    //dd($validatedData);
    Komentar::create($validatedData);

    return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getNameByUserId($id)
    {
        $user = User::find($id);
        return $user->name;
    }

    public function show($id)
    {
        
        $recents = Berita::latest()->take(4)->get();
        
        $selected = berita::find($id);

        if ($selected->status =='reject' or $selected->status =='') {
            return redirect()->route('headline.show');
        }
        return view('news', [
            'news' => berita::find($id),
            'komentar' => $selected->komentar,
            'penulis' => $this->getNameByUserID($selected->user_id),
            'recent1' => $recents->get(0),
            'recent2' => $recents->get(1),
            'recent3' => $recents->get(2),
            'recent4' => $recents->get(3),
        ]);
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

    public function destroyKomentar($id) 
    {
        $komentar = Komentar::findOrFail($id);

        $komentar->delete();
    
        return redirect()->back()->with('success', 'Komentar berhasil dihapus!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
