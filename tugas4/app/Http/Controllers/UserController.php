<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
{
    // Pastikan hanya admin yang bisa mengakses halaman ini
    if (Auth::user()->level !== 'Admin') {
        return redirect()->route('dashboard')->with('error', 'Access denied.');
    }

    $users = User::all();
    return view('users.index', compact('users'));
}
}

