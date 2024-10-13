<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::paginate(5);
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment berhasil ditambahkan');
    }

    public function edit(Payment $payment)
    {
        return view('payments.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'payment_method' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required',
        ]);

        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment berhasil diupdate');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment berhasil dihapus');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $payments = Payment::where('payment_method', 'like', "%{$search}%")
            ->orWhere('status', 'like', "%{$search}%")
            ->paginate(10);

        return view('payments.index', compact('payments'));
    }
}
