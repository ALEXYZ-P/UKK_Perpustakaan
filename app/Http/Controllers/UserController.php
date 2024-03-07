<?php

namespace App\Http\Controllers;

use App\Models\Role;
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
        $ValidatedData['level'] = 'Admin';

        $data = User::create($ValidatedData);

         // Menambahkan data role
        $role = new Role();
        $role->id_user = $data->id;
        $role->id_akses = [1, 3, 4, 5, 6, 9, 10, 11];
        // $role->id_akses = 1;
        // $role->id_akses = 3;
        // $role->id_akses = 4;
        // $role->id_akses = 5;
        // $role->id_akses = 6;
        // $role->id_akses = 9;
        // $role->id_akses = 10;
        // $role->id_akses = 11;
        $role->save();

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

        return view('dashboard.data_pegawai.edit',['data'=>$data, 'role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'username'      => 'required',
        //     'nik'           => 'required',
        //     'nama'          => 'required',
        //     'email'         => 'required',
        //     'password'      => 'required',
        //     // 'alamat'     => 'required',
        //     // 'nohp'       => 'required',
        //     // 'tgl_lahir'  => 'required'

        // ]);

        $data = User::findOrFail($id);
        $data->update([
            'username'      => $request->input('username'),
            'nik'           => $request->input('nik'),
            'nama'          => $request->input('nama'),
            'email'         => $request->input('email'),
            'password'      => $request->input('password'),
            'alamat'        => $request->input('alamat'),
            'nohp'          => $request->input('nohp'),
            'tgl_lahir'     => $request->input('tgl_lahir'),
        ]);

        return redirect('/data/user')->with('success','Data edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $relasik = Role::where('id_user',$id);
        $relasik->delete();
        $data = User::findOrFail($id);
        $data->delete();

        return redirect('/data/user')->with('success','Data deleted successfully!');
    }

    // public function update_member (Request $request, string $id)
    // {
    //     $data = User::findOrFail($id);
    //     $data->update([
    //         'username'      => $request->input('username'),
    //         'nik'           => $request->input('nik'),
    //         'nama'          => $request->input('nama'),
    //         'email'         => $request->input('email'),
    //         'password'      => $request->input('password'),
    //         'alamat'        => $request->input('alamat'),
    //         'nohp'          => $request->input('nohp'),
    //         'tgl_lahir'     => $request->input('tgl_lahir'),
    //     ]);

    //     // Mencari record yang dritubah
    //     // $data = User::findOrFail($id);
    //     // proses ubah data table user
    //     $data->update();

    //     // Flash a success message to the session
    //     return redirect('/data/user')->with('success','Data edited successfully!');
    // }

    // public function update_profile(Request $request, string $id)
    // {
    //     $data = User::findOrFail($id);
    //     $data->update([
    //         'username'      => $request->input('username'),
    //         'nik'           => $request->input('nik'),
    //         'nama'          => $request->input('nama'),
    //         'email'         => $request->input('email'),
    //         'password'      => $request->input('password'),
    //         'alamat'        => $request->input('alamat'),
    //         'nohp'          => $request->input('nohp'),
    //         'tgl_lahir'     => $request->input('tgl_lahir'),
    //     ]);

    //     // Mencari record yang dritubah
    //     // $data = User::findOrFail($id);
    //     // proses ubah data table user
    //     $data->update();

    //     // Flash a success message to the session
    //     return redirect()->route('profile.show', ['id' => $id])->with('success', 'Record updated successfully!');
    // }
}
