<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\RelasiKategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelasiKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RelasiKategori::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.relasiKategori',['data'=>$data, 'role_menu'=> $role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = Buku::all();
        $kategori = Kategori::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_relasiKategori.create',['buku'=>$buku,'kategori'=>$kategori, 'role_menu'=> $role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $ValidatedData = $request->validate ([
            'id_buku'       => 'required',
            'id_kategori'   => 'required'
        ]);

        $data = RelasiKategori::create($ValidatedData);

        return redirect('/data/relasiK')->with('success','Data added successfully!');
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
        $data = RelasiKategori::findOrFail($id);
        $buku = Buku::all();
        $kategori = Kategori::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_relasiKategori.edit',['data'=>$data,'buku'=>$buku,'kategori'=>$kategori, 'role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = RelasiKategori::findOrFail($id);

        $ValidatedData = $request->validate([
            'id_buku',
            'id_kategori'
        ]);

        $data->update($ValidatedData);

        return redirect('/data/relasiK')->with('success','data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = RelasiKategori::findOrFail($id);
        $data->delete();

        return redirect('/data/relasiK')->with('success','data berhasil dihapus!');
    }
}
