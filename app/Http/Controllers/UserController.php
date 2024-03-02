<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Buku;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('level', 'Admin')->get();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.pegawai',['data'=>$data, 'data1' => $data1, 'role_menu'=> $role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_pegawai.create',['role_menu'=> $role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'username'      => 'required',
            'nik'           => 'required',
            'nama'          => 'required',
            'email'         => 'required',
            'password'      => 'required',
            // 'alamat'     => 'required',
            // 'nohp'       => 'required',
            // 'tgl_lahir'  => 'required'
        ]);

        $ValidatedData['password'] = Hash::make($ValidatedData['password']);

        $data = User::create($ValidatedData);

        return redirect('/data/user')->with('success','Data added successfully!');
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
        $data = User::findOrFail($id);
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_pegawai.edit',compact('data'),['role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username'      => 'required',
            'nik'           => 'required',
            'nama'          => 'required',
            'email'         => 'required',
            'password'      => 'required',
            // 'alamat'     => 'required',
            // 'nohp'       => 'required',
            // 'tgl_lahir'  => 'required'

        ]);

        $data = User::findOrFail($id);
        $data->update([
            'username'      => $request->input('username'),
            'nik'           => $request->input('nik'),
            'nama'          => $request->input('nama'),
            'email'         => $request->input('email'),
            'password'      => $request->input('password'),
            // 'alamat'     => $request->input('alamat'),
            // 'nohp'       => $request->input('nohp'),
            // 'tgl_lahir'  => $request->input('tgl_lahir'),
        ]);

        return redirect('/data/user')->with('success','Data edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect('/data/user')->with('success','Data deleted successfully!');
    }
}
