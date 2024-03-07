<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Koleksi;
use App\Models\Peminjaman;
use App\Models\RelasiKategori;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $data = Buku::all();
        $koleksi = Koleksi::all();
        $ulasan = Ulasan::all();
        $kategori = Kategori::all();

        $liked = DB::table('koleksis')
        ->join('users', 'users.id', '=', 'koleksis.id_user')
        ->where('id_user','=',Auth::user()->id)
        ->get();

        return view('landingPage.index', ['user' => $user, 'data' => $data,'liked'=>$liked, 'koleksi'=>$koleksi, 'ulasan'=>$ulasan, 'kategori'=>$kategori]);
    }

    public function index2()
    {
        // $user = User::findOrFail(Auth::user()->id);
        $data = Buku::all();
        $koleksi = Koleksi::all();
        $ulasan = Ulasan::all();
        $kategori = Kategori::all();

        // $liked = DB::table('koleksis')
        // ->join('users', 'users.id', '=', 'koleksis.id_user')
        // ->where('id_user','=',Auth::user()->id)
        // ->get();

        return view('landingPage.index2', [ 'data' => $data, 'koleksi'=>$koleksi, 'ulasan'=>$ulasan, 'kategori'=>$kategori]);
    }

    // public function detail()
    // {
    //     $data = Buku::findOrFail();
    //     $kategori = Kategori::all();
    //     $user = User::findOrFail(Auth::user()->id);
    //     return view('landingPage.detail',['data'=>$data, 'kategori'=>$kategori, 'user'=>$user]);
    // }

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
        // dd($request);
        $buku = Buku::findOrFail($request->id_buku);

        // Ambil data barang yang dikirim dari form
        $id_buku = $request->input('id_buku');
        $id_user = $request->input('id_user');
        $jumlah = $request->input('jumlah_peminjaman');
        if ($buku->stok < (int)$jumlah) {
            return response()->json(['error' => false]);
        }
        // Kurangi jumlah kopi yang tersedia
        // $buku->decrement('stok', (int)$jumlah);

        // Buat entri peminjaman
        $peminjaman = new Peminjaman();
        $peminjaman->id_user = $id_user;
        $peminjaman->id_buku = $id_buku;
        $peminjaman->jumlah_peminjaman = $jumlah;
        $peminjaman->status = 'MENGANTRE';
        $peminjaman->tgl_pengajuan = now();
        // $peminjaman->tgl_peminjaman = now(); // Tanggal peminjaman
        // $peminjaman->tgl_pengembalian = now()->addDays(7); // Tanggal pengembalian
        // $peminjaman->masa_pinjam = 7;
        $peminjaman->save();

        // Beri respons JSON untuk AJAX
    return response()->json(['success' => true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Buku::findOrFail($id);
        $ulasan = Ulasan::all();
        $kategori = Kategori::all();
        $user = User::findOrFail(Auth::user()->id);
        $rk = RelasiKategori::all();

        $relasik = DB::table('relasi_kategoris')
        ->join('bukus', 'bukus.id', '=', 'relasi_kategoris.id_buku')
        ->where('id_buku','=', Buku::findOrFail($id))
        ->get();

        return view('landingPage.detail',['data'=>$data, 'ulasan'=>$ulasan, 'kategori'=>$kategori, 'user'=>$user, 'relasik'=>$relasik]);
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
