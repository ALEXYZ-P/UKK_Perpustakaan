<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\RelasiKategori;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.buku',['data'=>$data, 'role_menu'=> $role]);

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

        return view('dashboard.data_buku.create',['buku'=>$buku,'kategori'=>$kategori, 'role_menu'=> $role]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $ValidatedData = $request->validate([
            'id_user'       => 'required',
            'sampul'        => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul'         => 'required',
            'penulis'       => 'required',
            'penerbit'      => 'required',
            'tahun_terbit'  => 'required',
            'sinopsis'      => 'required',
            'stok'          => 'required'
        ]);


        $imageName = time().'.'.$request->sampul->extension();

        $request->sampul->storeAs('public/images', $imageName);

        $ValidatedData['sampul'] = $imageName;
        // dd($ValidatedData['sampul']);

        $ValidationBuku = $request->validate ([
            'id_kategori'   => 'required'
        ]);

        $data = Buku::create($ValidatedData);

        // memanggil id dari buku dan disimpan di relasiKategori
        $idBuku = $data->id;
        $buku = new RelasiKategori($ValidationBuku);
        $buku->id_buku = $idBuku;
        $buku->save();

        return redirect('/data/buku')->with('success', 'Buku berhasil ditambahkan!');
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
        $data = Buku::findOrFail($id);
        $data2 = RelasiKategori::findOrFail($id);
        $kategori = Kategori::all();
        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;
        return view('dashboard.data_buku.edit',['data'=>$data, 'data2' => $data2, 'kategori'=>$kategori, 'role_menu'=> $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $ValidatedData = $request->validate([
            'id_user'       => 'required',
            // 'sampul'        => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul'         => 'required',
            'penulis'       => 'required',
            'penerbit'      => 'required',
            'tahun_terbit'  => 'required',
            'sinopsis'      => 'required',
            'stok'          => 'required'

        ]);

        $ValidationBuku = $request->validate ([
            'id_kategori'   => 'required'
        ]);

        $data = Buku::findOrFail($id);

        if ($request->hasFile('sampul')) {
            // Hapus sampul lama jika ada
            if ($data->sampul) {
                \Storage::delete('public/images/'.$data->sampul);
            }

            // Upload dan simpan sampul baru
            $imageName = time().'.'.$request->sampul->extension();
            $request->sampul->storeAs('public/images/', $imageName);
            $ValidatedData['sampul'] = $imageName;
        } else {
            // Jika tidak ada file sampul baru diunggah, tetap gunakan sampul yang ada
            $ValidatedData['sampul'] = $data->sampul;
        }

        $data->update($ValidatedData);


        // mencari record yang dirubah di table RelasiKategori
        $relasik = RelasiKategori::where('id_buku', $id)->first();
        // Update data RelasiKategori
        $relasik->update($ValidationBuku);
        // dd($relasik);
        return redirect('/data/buku')->with('success','Data edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $relasik = RelasiKategori::where('id_buku',$id);
        $relasik->delete();
        $data = Buku::findOrFail($id);
        $data->delete();

        return redirect('/data/buku')->with('success','Data deleted successfully!');
    }

    public function laporan()
    {
        $buku = Buku::all();

        $data1 = User::findOrFail(Auth::user()->id);
        $role = $data1->role_menu;

        return view('dashboard.data_buku.laporan',['buku'=>$buku,'role_menu'=> $role]);
    }

    public function cetak(Request $request)
    {
        $bulan_tahun = $request->input('bulan_tahun');

        list($bulan, $tahun) = explode('-', $bulan_tahun);

        $results = Buku::whereYear('created_at', $tahun)
                            ->whereMonth('created_at', $bulan)
                            ->get();
        return view('dashboard.pdf.laporan',['data' => $results,'bulan_tahun' => $bulan_tahun]);
    }






}
