<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
	public function index()
	{
		$barang = Barang::paginate(5);

		return view('barang.index', ['data' => $barang]);
	}

	public function tambah()
	{
		$kategori = Kategori::get();

		return view('barang.form', ['kategori' => $kategori]);
	}

	public function simpan(Request $request)
	{
		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Barang::create($data);

		return redirect()->route('barang');
	}

	public function edit($id)
{
    $barang = Barang::find($id); // Jangan gunakan first() karena find() sudah mengembalikan satu record
    $kategori = Kategori::get();

    return view('barang.form', ['barang' => $barang, 'kategori' => $kategori]);
}


	public function update($id, Request $request)
	{
		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Barang::find($id)->update($data);

		return redirect()->route('barang');
	}

	public function hapus($id)
	{
		Barang::find($id)->delete();

		return redirect()->route('barang');
	}

	public function search(Request $request)
{
    // Get the search keyword from the request
    $keyword = $request->input('search');

    if ($keyword) {
        // If a keyword is provided, search for matching items
        $barang = Barang::where('nama_barang', 'like', "%" . $keyword . "%")->paginate(5);
    } else {
        // If no keyword is provided, return all items with pagination
        $barang = Barang::paginate(5);
    }

    // Return the results to the same view
    return view('barang.index', ['data' => $barang]);
}

}