<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peminjaman::orderBy('created_at','desc')->where('status', 'DIPINJAM')->orWhere('status', 'TERLAMBAT')->get();
        $user = User::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.pengembalian',['data'=>$data, 'user'=> $user, 'role_menu'=> $role]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data = Peminjaman::findOrFail($id);
        $buku = Buku::all();
        $user = User::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_pengembalian.edit', compact('buku', 'user'),['data' => $data, 'role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Ambil data peminjaman berdasarkan ID
        $peminjaman = Peminjaman::findOrFail($id);

        // Ambil data buku berdasarkan ID buku yang diterima dari form
        $buku = Buku::findOrFail($request->input('id_buku'));

        // Ambil data jumlah peminjaman
        $jumlah = $request->input('jumlah_peminjaman');

        // Periksa apakah stok cukup
        // if ($buku->stok < (int)$jumlah) {
        //     return response()->json(['error' => false]);
        // }

        // Kurangi jumlah kopi yang tersedia
        $buku->increment('stok', (int)$jumlah);

        // Update data peminjaman
        $peminjaman->id_user = $request->input('id_user');
        $peminjaman->id_buku = $request->input('id_buku');
        $peminjaman->jumlah_peminjaman = $jumlah;
        $peminjaman->status = 'DIKEMBALIKAN'; // Ubah status menjadi 'DIPINJAM'
        // $peminjaman->tgl_pengajuan = $request->input('tgl_pengajuan');
        // $peminjaman->tgl_peminjaman = now(); // Tanggal peminjaman
        // $peminjaman->tgl_pengembalian = now()->addDays(7); // Tanggal pengembalian
        // $peminjaman->masa_pinjam = 7;

        // Simpan perubahan
        $peminjaman->save();

        return redirect('/data/pengembalian')->with('success', 'Berhasil meminjam buku.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
