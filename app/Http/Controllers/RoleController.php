<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Role::all();
        // $data1 = User::findOrFail(1);
        // $role = $data1->role_menu;
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.role',['data' => $data, 'role_menu'=> $role]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $akses = Akses::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;
        return view('dashboard.data_role.create',['user'=>$user,'akses'=>$akses, 'role_menu'=> $role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'id_user' => 'required',
            'id_akses' => 'required'
        ]);

        $data = Role::create($ValidatedData);

        return redirect('/data/role')->with('success','Data Role berhasi ditambahkan!');
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
        $data = Role::findOrFail($id);
        $user = User::all();
        $akses = Akses::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_role.edit',['data'=>$data,'user'=>$user,'akses'=>$akses, 'role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Role::findOrFail($id);

        $ValidatedData = $request->validate([
            'id_user' => 'required',
            'id_akses' => 'required'
        ]);

        $data->update($ValidatedData);

        return redirect('/data/role')->with('success','Data Role berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Role::findOrFail($id);
        $data->delete();

        return redirect('data/role')->with('success','Data Role berhasil dihapus');
    }
}
