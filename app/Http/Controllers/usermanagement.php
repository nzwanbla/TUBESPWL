<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\berita;

class usermanagement extends Controller
{
    public function index()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->jumlah_berita = berita::where('user_id', $user->id)->count();
        }
        return view('usermanagement', ['user' => $users]); 
    }
    public function destroy($id)
    {
        User::destroy($id);
        berita::where('user_id',$id)->delete();
        
        return redirect()->route('usermanagement');
    }
}
