@extends('layouts.app')

@section('title', 'Media Upload')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Media Upload</h6>
        </div>
        <div class="card-body">
            <!-- Form untuk upload -->
            <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Upload File</label>
                    <input type="file" class="form-control" name="file" id="file" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <!-- Daftar Media -->
            <h3 class="mt-5">Media List</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Filename</th>
                        <th>Image</th> <!-- Kolom baru untuk menampilkan gambar -->
                        <th>Filepath</th>
                        <th>Filetype</th>
                        <th>Filesize</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($media as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->filename }}</td>
                        <td>
                            <!-- Tampilkan gambar -->
                            <img src="{{ asset('storage/' . $item->filepath) }}" alt="{{ $item->filename }}" style="width: 100px;">
                        </td>
                        <td>{{ $item->filepath }}</td>
                        <td>{{ $item->filetype }}</td>
                        <td>{{ $item->filesize }} KB</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $media->links() }}
        </div>
    </div>
@endsection
