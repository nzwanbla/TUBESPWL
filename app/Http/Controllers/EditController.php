<?php

namespace App\Http\Controllers;
Use App\Models\berita;
Use App\Models\jenis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = berita::all();        
        return view('edit', ['news' => $news, 'selectedNews' => $selectedNews]);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = jenis::all();
        $selectednews = berita::find($id);
        $selecteduser = User::find($selectednews->user_id);
        return view('edit', ['selectedNews' => $selectednews, 'types' => $types, 'selecteduser' => $selecteduser->name]);

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
        if(Auth::id() == 1){
        $validatedData = $request->validate([
            'judul_berita'  => 'required',
            'jenis_berita'  => 'required',
            'judul1'        => 'required',
            'isi1'          => 'required',
            'judul2'        => 'nullable',
            'isi2'          => 'nullable',
            'judul3'        => 'nullable',
            'isi3'          => 'nullable',
            'status'        => 'required',
            'fileimage'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $beritaDipilih = Berita::findOrFail($id);

        $statusBerubahKeReject = $request->status === 'reject' && $beritaDipilih->status !== 'reject';
    
        if ($statusBerubahKeReject) {
            $minAcceptedInternasional = 4;
            $minAcceptedSport = 5;
            $minAcceptedOther = 6;
    
            $jumlahAcceptedSetelahUpdateInternasional = Berita::where('jenis_berita', 'Internasional')->where('status', 'accept')->where('id', '!=', $id)->count();
            $jumlahAcceptedSetelahUpdateSport = Berita::where('jenis_berita', 'Sport')->where('status', 'accept')->where('id', '!=', $id)->count();
            $jumlahAcceptedSetelahUpdateOther = Berita::whereNotIn('jenis_berita', ['Internasional', 'Sport'])->where('status', 'accept')->where('id', '!=', $id)->count();
    
            if ($jumlahAcceptedSetelahUpdateInternasional < $minAcceptedInternasional && $beritaDipilih->jenis_berita === 'Internasional') {
                return redirect()->back()->with('error', 'Tidak dapat mengubah status berita Internasional menjadi reject karena jumlah minimum berita Internasional yang diterima belum terpenuhi.');
            }
            if ($jumlahAcceptedSetelahUpdateSport < $minAcceptedSport && $beritaDipilih->jenis_berita === 'Sport') {
                return redirect()->back()->with('error', 'Tidak dapat mengubah status berita Sport menjadi reject karena jumlah minimum berita Sport yang diterima belum terpenuhi.');
            }
            if ($jumlahAcceptedSetelahUpdateOther < $minAcceptedOther && !in_array($beritaDipilih->jenis_berita, ['Internasional', 'Sport'])) {
                return redirect()->back()->with('error', 'Tidak dapat mengubah status berita menjadi reject karena jumlah minimum berita yang diterima belum terpenuhi.');
            }
        }
        
        if ($request->hasFile('fileimage')) {
            $file = $request->file('fileimage');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $fileName, 'public'); 
            $validatedData['fileimage'] = $filePath; 
        }

        $beritaDipilih->update($validatedData);
    
        return redirect()->route('dashboard')->with('success', 'Berita berhasil diperbarui.');
    }else{
        $validatedData = $request->validate([
            'status'        => 'required',
        ]);
        $beritaDipilih = Berita::findOrFail($id);

                $statusBerubahKeReject = $request->status === 'reject' && $beritaDipilih->status !== 'reject';
    
                if ($statusBerubahKeReject) {
                    $minAcceptedInternasional = 4;
                    $minAcceptedSport = 5;
                    $minAcceptedOther = 6;
            
                    $jumlahAcceptedSetelahUpdateInternasional = Berita::where('jenis_berita', 'Internasional')->where('status', 'accept')->where('id', '!=', $id)->count();
                    $jumlahAcceptedSetelahUpdateSport = Berita::where('jenis_berita', 'Sport')->where('status', 'accept')->where('id', '!=', $id)->count();
                    $jumlahAcceptedSetelahUpdateOther = Berita::whereNotIn('jenis_berita', ['Internasional', 'Sport'])->where('status', 'accept')->where('id', '!=', $id)->count();
            
                    if ($jumlahAcceptedSetelahUpdateInternasional < $minAcceptedInternasional && $beritaDipilih->jenis_berita === 'Internasional') {
                        return redirect()->back()->with('error', 'Tidak dapat mengubah status berita Internasional menjadi reject karena jumlah minimum berita Internasional yang diterima belum terpenuhi.');
                    }
                    if ($jumlahAcceptedSetelahUpdateSport < $minAcceptedSport && $beritaDipilih->jenis_berita === 'Sport') {
                        return redirect()->back()->with('error', 'Tidak dapat mengubah status berita Sport menjadi reject karena jumlah minimum berita Sport yang diterima belum terpenuhi.');
                    }
                    if ($jumlahAcceptedSetelahUpdateOther < $minAcceptedOther && !in_array($beritaDipilih->jenis_berita, ['Internasional', 'Sport'])) {
                        return redirect()->back()->with('error', 'Tidak dapat mengubah status berita menjadi reject karena jumlah minimum berita yang diterima belum terpenuhi.');
                    }
                }
                
                $beritaDipilih->update($validatedData);
            
                return redirect()->route('dashboard')->with('success', 'Berita berhasil diperbarui.');
        

    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $minInternasional = 5; 
        $minSport = 5;
        $minOther = 6; 
    
        $berita = Berita::findOrFail($id);
    
        $jumlahSetelahHapusInternasional = Berita::where('jenis_berita', 'Internasional')->where('id', '!=', $id)->count();
        $jumlahSetelahHapusSport = Berita::where('jenis_berita', 'Sport')->where('id', '!=', $id)->count();
        $jumlahSetelahHapusOther = Berita::whereNotIn('jenis_berita', ['Internasional', 'Sport'])->where('id', '!=', $id)->count();
    
        // Validasi
        if ($jumlahSetelahHapusInternasional < $minInternasional) {
            return redirect()->back()->with('error', 'Tidak dapat menghapus berita Internasional karena jumlah minimum belum terpenuhi.');
        }
        if ($jumlahSetelahHapusSport < $minSport) {
            return redirect()->back()->with('error', 'Tidak dapat menghapus berita Sport karena jumlah minimum belum terpenuhi.');
        }
        if ($jumlahSetelahHapusOther < $minOther) {
            return redirect()->back()->with('error', 'Tidak dapat menghapus berita karena jumlah minimum belum terpenuhi.');
        }
    
        $berita->delete();
    
        return redirect()->route('dashboard')->with('success', 'Berita berhasil dihapus.');
    }
    
}
