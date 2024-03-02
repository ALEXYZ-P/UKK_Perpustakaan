<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = User::where('level', 'Admin')->get();
        // $data1 = User::findOrFail(Auth::user()->id);
        // $role = $data1->role_menu;

        // return view('dashboard.pegawai',['data'=>$data, 'data1' => $data1, 'role_menu'=> $role]);
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
        // Mengambil data pengguna yang sedang login
        $user = User::findOrFail(Auth::user()->id);
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        // Mengembalikan view profil dengan data pengguna
        return view('landingPage.profile',['user' =>$user, 'role_menu'=> $role]);

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
