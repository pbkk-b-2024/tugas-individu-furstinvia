<?php

namespace App\Http\Controllers;

use App\Models\Order; // Pastikan Anda mengimpor model Order
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(5);
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_order' => 'required',
            'nama_customer' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order berhasil ditambahkan.');
    }

    public function edit(Order $order)
    {
        return view('orders.form', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'kode_order' => 'required',
            'nama_customer' => 'required',
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Order berhasil diperbarui.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order berhasil dihapus.');
    }

    public function search(Request $request)
{
    $keyword = $request->input('search');
    
    // Mencari berdasarkan kode_order, nama_customer, atau nama_barang
    $orders = Order::where('kode_order', 'like', "%" . $keyword . "%")
        ->orWhere('nama_customer', 'like', "%" . $keyword . "%")
        ->orWhere('nama_barang', 'like', "%" . $keyword . "%")
        ->paginate(10); // Menggunakan pagination, sesuaikan dengan jumlah data yang diinginkan

    return view('orders.index', compact('orders')); // Pastikan view ini benar
}

public function show($id)
{
    // Cari order berdasarkan id
    $order = Order::findOrFail($id);

    // Kembalikan view dengan data order
    return view('orders.show', compact('order'));
}


}
