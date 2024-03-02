<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AksesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Akses::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;
        return view('dashboard.akses',['data'=>$data, 'role_menu'=> $role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;
        return view('dashboard.data_akses.create',['role_menu'=> $role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'menu' => 'required'
        ]);

        Akses::create($ValidatedData);

        return redirect('/data/akses')->with('success','Data Akses berhasil ditambahkan!');
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
        $data = Akses::findOrFail($id);
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_akses.edit',['data'=>$data, 'role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ValidatedData = $request->validate([
            'menu' => 'required'
        ]);

        $data = Akses::findOrFail($id);
        $data->update($ValidatedData);

        return redirect('/data/akses')->with('success','Data Akses berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Akses::findOrFail($id);
        $data->delete();
        return redirect('data/akses')->with('success','Data Berhasil dihapus!');
    }
}
