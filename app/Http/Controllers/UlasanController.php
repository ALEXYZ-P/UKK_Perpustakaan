<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
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
        {
            // Validasi request
            $request->validate([
                'id_user' => 'required',
                'id_buku' => 'required',
                'ulasan' => 'required',
            ]);

            // Buat entri baru di koleksi
            $u = new Ulasan();
            $u->id_user = $request->id_user;
            $u->id_buku = $request->id_buku;
            $u->ulasan = $request->ulasan;

            // Simpan data koleksi
            $u->save();

    // Beri respons JSON untuk AJAX
return response()->json(['success' => true]);

}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
