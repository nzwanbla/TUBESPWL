<?php

namespace App\Http\Controllers;
use App\Models\berita;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $recents = Berita::latest()->take(4)->get();
        
        $selected = berita::find($id);

        if ($selected->status =='reject' or $selected->status =='') {
            return redirect()->route('headline.show');
        }

        return view('news', [
            'news' => berita::find($id),
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
