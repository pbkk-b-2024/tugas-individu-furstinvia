<?php

namespace App\Http\Controllers;

use App\Models\ProductReturn;
use App\Models\Barang; // Pastikan untuk mengimpor model Barang
use Illuminate\Http\Request;

class ProductReturnController extends Controller
{
    public function index()
    {
        $returns = ProductReturn::with('barang')->paginate(3); // Mengambil data pengembalian dengan relasi barang
        return view('returns.index', compact('returns'));
    }

    public function create()
    {
        $products = Barang::all(); // Ambil semua produk untuk dropdown
        return view('returns.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:barang,id', // Validasi untuk product_id
            'return_reason' => 'required',
            'return_date' => 'required|date',
            'status' => 'required|in:pending,completed,refunded',
        ]);

        ProductReturn::create($request->all()); // Simpan data pengembalian
        return redirect()->route('returns.index')->with('success', 'Pengembalian berhasil ditambahkan.');
    }

    public function edit(ProductReturn $return)
    {
        $products = Barang::all(); // Ambil semua produk untuk dropdown
        return view('returns.edit', compact('return', 'products'));
    }

    public function update(Request $request, ProductReturn $return)
    {
        $request->validate([
            'product_id' => 'required|exists:barang,id',
            'return_reason' => 'required',
            'return_date' => 'required|date',
            'status' => 'required|in:pending,completed,refunded',
        ]);

        $return->update($request->all()); // Update data pengembalian
        return redirect()->route('returns.index')->with('success', 'Pengembalian berhasil diperbarui.');
    }

    public function destroy(ProductReturn $return)
    {
        $return->delete(); // Hapus data pengembalian
        return redirect()->route('returns.index')->with('success', 'Pengembalian berhasil dihapus.');
    }
}
