<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Koleksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // Validasi request
                $request->validate([
                    'id_user' => 'required',
                    'id_buku' => 'required',
                ]);

                // Buat entri baru di koleksi
                $koleksi = new Koleksi();
                $koleksi->id_user = $request->id_user;
                $koleksi->id_buku = $request->id_buku;

                // Simpan data koleksi
                $koleksi->save();

        // Beri respons JSON untuk AJAX
    return response()->json(['success' => true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $koleksi = Koleksi::all();
        $user = User::findOrFail($id);
        $buku = Buku::all();
        $kategori = Kategori::all();

        return view('landingPage.liked',['koleksi'=>$koleksi, 'buku'=>$buku, 'kategori'=>$kategori, 'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $koleksi = Koleksi::findOrFail($id);
        $koleksi->delete();

        return response()->json(['success' => true]);

    }

    public function unlike(Request $request)
    {
        $id_user = $request->input('id_user');
        $id_buku = $request->input('id_buku');
        $koleksi = Koleksi::where(
            ['id_user', '=', $id_user],
            ['id_buku', '=', $id_buku],
        );
        $koleksi->delete();

        return response()->json(['success' => true]);

    }
}
