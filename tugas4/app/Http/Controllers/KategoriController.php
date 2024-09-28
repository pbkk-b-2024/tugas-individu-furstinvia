<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Method untuk halaman web
    public function index()
    {
        $kategori = Kategori::paginate(5);
        return view('kategori.index', ['kategori' => $kategori]);
    }

    // Method untuk API
    public function apiIndex()
    {
        $kategori = Kategori::all();
        return response()->json($kategori);
    }

    // Fungsi untuk API single category
    public function single($id)
    {
        $kategori = Kategori::find($id);
        return response()->json($kategori);
    }

    public function tambah()
    {
        return view('kategori.form');
    }

    public function simpan(Request $request)
    {
        Kategori::create(['nama' => $request->nama]);
        return redirect()->route('kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('kategori.form', ['kategori' => $kategori]);
    }

    public function update(Request $request, $id)
    {
        Kategori::find($id)->update(['nama' => $request->nama]);
        return redirect()->route('kategori');
    }

    public function hapus($id)
    {
        Kategori::find($id)->delete();
        return redirect()->route('kategori');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $kategori = Kategori::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('kategori.index', ['kategori' => $kategori]);
    }

    // Fungsi store untuk API
    public function store(Request $request)
    {
        $kategori = Kategori::create($request->all());
        return response()->json(['message' => 'Kategori berhasil ditambahkan', 'data' => $kategori], 201);
    }

    // Fungsi update untuk API
    public function updateApi(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->update($request->all());
        return response()->json(['message' => 'Kategori berhasil diperbarui', 'data' => $kategori], 200);
    }

    // Fungsi hapus untuk API
    public function destroy($id)
    {
        Kategori::find($id)->delete();
        return response()->json(['message' => 'Kategori berhasil dihapus'], 200);
    }
}
