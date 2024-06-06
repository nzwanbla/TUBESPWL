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

    public function updatemoderator($id) {
        $user = User::findOrFail($id);
    
        $user->update(['moderator' => $user->moderator ? 0 : 1]);
    
        $message = $user->moderator ? 'User dijadikan Moderator.' : 'User tidak lagi menjadi Moderator.';
        return back()->with(['error' => $message]);
    }
    
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $userPosts = berita::where('user_id', $id)->get();
    
        $userPostCounts = [
            'Internasional' => 0,
            'Sport' => 0,
            'Other' => 0,
        ];
    
        foreach ($userPosts as $post) {
            if ($post->jenisberita == 'Internasional') {
                $userPostCounts['Internasional']++;
            } elseif ($post->jenisberita == 'Sport') {
                $userPostCounts['Sport']++;
            } else {
                $userPostCounts['Other']++;
            }
        }
    
        $jumlahberitainternasional = berita::where('jenis_berita', 'Internasional')->count() - $userPostCounts['Internasional'];
        $jumlahberitasport = berita::where('jenis_berita', 'Sport')->count() - $userPostCounts['Sport'];
        $jumlahBeritaOther = Berita::whereNotIn('jenis_berita', ['Internasional', 'Sport'])->count() - $userPostCounts['Other'];
    
        if ($jumlahberitainternasional >= 4 && $jumlahberitasport >= 5 && $jumlahBeritaOther >= 6) {
            User::destroy($id);
            berita::where('user_id', $id)->delete();
            Komentar::where('username', $user->name)->delete();
    
            return redirect()->route('usermanagement')->with('success', 'User dan semua postingannya berhasil dihapus.');
        } else {
            return back()->with(['error' => 'User tidak dapat dihapus karena akan melanggar jumlah minimum berita.']);
        }
    }
    }
