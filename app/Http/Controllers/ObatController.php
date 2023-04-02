<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
 
    public function index()
    {
        $obats = Obat::all();
        return view('obat.index', compact('obats'));
    }

 
    public function create()
    {
        return view('obat.create');
    }


    public function store(Request $request)
    {
        Obat::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
        ]);
        return redirect()->route('index.obat')->with('success', 'Obat created successfully.');
    }


    public function edit($id)
    {
        $obat = Obat::find($id);
        return view('obat.update', compact('obat'));
    }


    public function update(Request $request)
    {
        $obat = Obat::find($request->id);
        $obat->nama = $request->nama;
        $obat->deskripsi = $request->deskripsi;
        $obat->tipe = $request->tipe;
        $obat->jumlah = $request->jumlah;
        $obat->harga_satuan = $request->harga_satuan;
        $obat->save(); 
        return redirect()->route('index.obat')->with('succes', 'Obat updated successfully.');
    }


    public function delete(Request $request)
    {
        $obat = Obat::find($request->id);
        $obat->delete();
        return redirect()->route('index.obat')->with('succes', 'Obat deleted successfully.');
    }
}
