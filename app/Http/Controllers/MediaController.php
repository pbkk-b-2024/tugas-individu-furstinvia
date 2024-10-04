<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
    // Gunakan paginate untuk mendapatkan data yang mendukung pagination
    $media = Media::paginate(10); // 10 adalah jumlah item per halaman
    return view('media.index', compact('media'));
    }


    public function store(Request $request)
{
    // Validasi file
    $request->validate([
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Simpan file yang diupload ke dalam direktori 'public/uploads'
    $filePath = $request->file('file')->store('uploads', 'public');

    // Simpan informasi file ke database
    $media = new Media;
    $media->filename = $request->file('file')->getClientOriginalName();
    $media->filepath = $filePath;
    $media->filetype = $request->file('file')->getClientMimeType();
    $media->filesize = $request->file('file')->getSize() / 1024; // dalam KB
    $media->save();

    return redirect()->route('media.index')->with('success', 'File berhasil diupload!');
}
}
