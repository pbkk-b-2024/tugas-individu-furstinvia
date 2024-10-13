<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        $shippings = Shipping::paginate(5);
        return view('shippings.index', compact('shippings'));
    }

    public function create()
    {
        return view('shippings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'shipping_address' => 'required',
            'recipient_name' => 'required',
            'phone_number' => 'required',
            'status' => 'required|in:pending,shipped,delivered',
        ]);

        Shipping::create($request->all());
        return redirect()->route('shippings.index')->with('success', 'Shipping created successfully.');
    }

    public function edit($id)
    {
        $shipping = Shipping::findOrFail($id);
        return view('shippings.edit', compact('shipping'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'shipping_address' => 'required',
            'recipient_name' => 'required',
            'phone_number' => 'required',
            'status' => 'required|in:pending,shipped,delivered',
        ]);

        $shipping = Shipping::findOrFail($id);
        $shipping->update($request->all());
        return redirect()->route('shippings.index')->with('success', 'Shipping updated successfully.');
    }

    public function destroy($id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->delete();
        return redirect()->route('shippings.index')->with('success', 'Shipping deleted successfully.');
    }
}
