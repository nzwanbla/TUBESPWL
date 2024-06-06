<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\berita;
Use App\Models\Komentar;


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
        $user = User::findOrFail($id);

        User::destroy($id);
        berita::where('user_id',$id)->delete();
        Komentar::where('username',$user->name)->delete();

        return redirect()->route('usermanagement');
    }
}
