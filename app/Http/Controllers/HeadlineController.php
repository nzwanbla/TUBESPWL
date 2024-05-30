<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;


class HeadlineController extends Controller
{
    public function welcome(Berita $berita)
    {
        $news = berita::all();
        $recents = Berita::latest()->where('status', 'accept')->take(4)->get();

        $internationals = Berita::where('jenis_berita', 'Internasional')
            // ->where('status', 'accept')  
            ->latest()
            ->take(4)
            ->get();

        $sports = Berita::where('jenis_berita', 'sport')
            ->where('status', 'accept')
            ->latest()
            ->take(6)
            ->get();

        $excludedIds = $recents->pluck('id') //Id berita yang sudah di ambil dari sport, international dan recent
            ->merge($internationals->pluck('id'))
            ->merge($sports->pluck('id'))
            ->all();
        

        $additionalRecents = Berita::latest()//ambil 6 recent yang belum di ambil
            ->where('status', 'accept')
            ->whereNotIn('id', $excludedIds)
            ->take(6)
            ->get();

        return view('headline', [
            'news' => Berita::all(),
            'recent1' => $recents->get(0),
            'recent2' => $recents->get(1),
            'recent3' => $recents->get(2),
            'recent4' => $recents->get(3),

            'additionalRecent1' => $additionalRecents->get(0),
            'additionalRecent2' => $additionalRecents->get(1),
            'additionalRecent3' => $additionalRecents->get(2),
            'additionalRecent4' => $additionalRecents->get(3),
            'additionalRecent5' => $additionalRecents->get(4),
            'additionalRecent6' => $additionalRecents->get(5),

            'international1' => $internationals->get(0),
            'international2' => $internationals->get(1),
            'international3' => $internationals->get(2),
            'international4' => $internationals->get(3),

            'sport1' => $sports->get(0),
            'sport2' => $sports->get(1),
            'sport3' => $sports->get(2),
            'sport4' => $sports->get(3),
            'sport5' => $sports->get(4),
        ]);
    }

    public function index()
    {
        return berita::all();
    }

    public function test()
    {
        return view('test');
    }
 
    public function show($id)
    {
        // return view('welcome', ['news' => berita::find($id)]);
    }

    public function store(Request $request)
    { 
        
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
