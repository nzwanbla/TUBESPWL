<?php

namespace App\Http\Controllers;
use App\Models\berita;
use Illuminate\Http\Request; 

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Berita::latest()->where('status', 'accept')->take(5)->get();

        return view('search', 
        ['news' => Berita::all()],
        compact('results')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nama = $request->input('query');


        $results = Berita::where('status', 'accept')
            ->where('judul_berita', 'like', '%' . $nama . '%')
            ->latest()
            ->take(5)
            ->get();

        return view('search', compact('results'));
        
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
        //
    }
}
