<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kategori::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.kategori',['data'=>$data, 'role_menu'=> $role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;
        return view('dashboard.data_kategori.create',['role_menu'=> $role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'nama' => 'required'
        ]);

        $data = Kategori::create($ValidatedData);

        return redirect('/data/kategori')->with('success','Kategori berhasil ditambahkan!');

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
        $data = Kategori::findOrFail($id);
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;
        return view('dashboard.data_kategori.edit',compact('data'),['role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $data = Kategori::findOrFail($id);
        $data->update([
            'nama' => $request->input('nama')
        ]);

        return redirect('/data/kategori')->with('success', 'Kategori berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Kategori::findOrFail($id);
        $data->delete();

        return redirect('/data/kategori')->with('success','Kategori berhasil dihapus!');
    }
}
