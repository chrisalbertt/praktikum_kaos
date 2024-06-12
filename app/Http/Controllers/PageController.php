<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kaos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }   

    public function kaos()
    {
        $kaos = Kaos::orderBy("id","desc")->get();
        return view("kaos", ["key" => "kaos", "mv" => $kaos]);
    }

    public function about()
    {
        return view("about", ["key" => "about"]);
    }

    public function faq()   
    {
        return view("faq", ["key" => "faq"]);
    }

    public function formaddkaos()
    {
        return view("form-add", ["key" => "kaos"]);
    }

    public function savekaos(Request $request)
    {
        $file_name = time(). "-" .$request->file('Poster')->getClientOriginalName();
        $path = $request -> file('Poster')->storeAs('Poster', $file_name,'public');

        Kaos::create([
        'Merek' => $request->Merek,
        'Ukuran' => $request->Ukuran,
        'Year' => $request->Year,
        'Poster' => $path
        ]);

        return redirect('/kaos')->with('alert', 'Data berhasil disimpan');
    }

    public function formeditkaos($id)
    {
        $kaos = Kaos::find($id);
        return view("form-edit", ["key" => "kaos", "mv" => $kaos]);
    }

    public function updatekaos($id, Request $request)
{
    $kaos = Kaos::find($id);
    $kaos->merek = $request->merek;
    $kaos->ukuran = $request->ukuran;
    $kaos->year = $request->year;

    // Periksa apakah ada file gambar baru yang diunggah
    if ($request->hasFile('Poster')) {
        // Hapus gambar lama dari penyimpanan jika ada
        if ($kaos->Poster) {
            Storage::delete('public/' . $kaos->Poster);
        }

        // Simpan gambar baru di penyimpanan
        $file_name = time() . '-' . $request->file('Poster')->getClientOriginalName();
        $path = $request->file('Poster')->storeAs('Poster', $file_name, 'public');
        $kaos->Poster = $path;
    }

    $kaos->save();

    return redirect("/kaos")->with('alert', 'Data berhasil diupdate');
}

    public function deletekaos($id)
{
    $kaos = Kaos::find($id);
   
    if ($kaos->poster) {    
        Storage::disk('public')->delete($kaos->poster);
    }
    $kaos->delete();
    return redirect('/kaos')->with('alert', 'Data berhasil Di Hapus');
}

public function login()
{
    return view("login");
}

public function formedituser()
    {
        return view("formedituser", ["key" => ""]);
    }
    
    public function updateuser(Request $request)
    {
        if ($request->password_baru == $request->konfirmasi_baru)
        {
            $user = Auth::user();
            $user->password = bcrypt($request->password_baru);
            $user->save();

            return redirect("/user")->with( 'info', 'Password berhasil diubah');
        }
        else
        {
            return redirect("/user")->with('info', 'Password gagal diubah');
        }
    }


}
