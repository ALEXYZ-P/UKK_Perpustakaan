<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Koleksi;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::count();
        $peminjaman = Peminjaman::count();
        $buku = Buku::count();
        $like = Koleksi::count();

        $totalUser = User::where('level', 'Member')->count(); // Corrected to count users with level 'Member'
        $totalDipinjam = Peminjaman::where('status', 'DIPINJAM')->count(); // Corrected to count borrowed books
        // Uncomment and correct if needed:
        // $totalBatal = Penjualan::where('status', '!=', 'bayar')->sum('total_harga');
        $stokBuku = Buku::sum('stok');

        $role = Auth::user()->role_menu; // Retrieve role_menu directly

        return view('dashboard.dashboard', [
            'user' => $user,
            'peminjaman' => $peminjaman,
            'buku' => $buku,
            'like' => $like,
            'totalUser' => $totalUser,
            'totalDipinjam' => $totalDipinjam,
            'stokBuku' => $stokBuku,
            'role_menu' => $role,
        ]);

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
