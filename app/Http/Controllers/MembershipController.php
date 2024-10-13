<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::paginate(5);
        return view('membership.index', compact('memberships'));
    }

    public function create()
    {
        return view('membership.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_member' => 'required',
            'email' => 'required|email|unique:memberships',
        ]);

        Membership::create($request->all());
        return redirect()->route('memberships.index')->with('success', 'Membership created successfully.');
    }

    public function show(Membership $membership)
    {
        return view('membership.show', compact('membership'));
    }

    public function edit(Membership $membership)
    {
        return view('membership.edit', compact('membership'));
    }

    public function update(Request $request, Membership $membership)
    {
        $request->validate([
            'nama_member' => 'required',
            'email' => 'required|email|unique:memberships,email,' . $membership->id,
        ]);

        $membership->update($request->all());
        return redirect()->route('memberships.index')->with('success', 'Membership updated successfully.');
    }

    public function destroy(Membership $membership)
    {
        $membership->delete();
        return redirect()->route('memberships.index')->with('success', 'Membership deleted successfully.');
    }

    public function search(Request $request)
{
    // Ambil kata kunci dari input pencarian
    $keyword = $request->input('search');

    // Query untuk mencari berdasarkan nama_member, email, atau status
    $memberships = Membership::where('nama_member', 'LIKE', "%{$keyword}%")
        ->orWhere('email', 'LIKE', "%{$keyword}%")
        ->orWhere('status', 'LIKE', "%{$keyword}%")
        ->paginate(10);

    // Kembalikan ke view dengan data pencarian
    return view('memberships.index', compact('memberships'));
}

}
