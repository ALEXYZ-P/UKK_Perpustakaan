<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('level', 'Member')->get();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.member',['data'=>$data,'role_menu'=> $role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_member.create',['role_menu'=> $role]);
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

        return redirect('/data/member')->with('success','Data added successfully!');
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

        return view('dashboard.data_member.edit',['data'=>$data, 'role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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

        return redirect('/data/member')->with('success','Data edited successfully!');
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

        return redirect('/data/member')->with('success','Data deleted successfully!');
    }


    public function update_profile(Request $request, string $id)
    {
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

        // Mencari record yang dritubah
        // $data = User::findOrFail($id);
        // proses ubah data table user
        $data->update();

        // Flash a success message to the session
        return redirect()->route('profile.show', ['id' => $id])->with('success', 'Record updated successfully!');
    }
}
