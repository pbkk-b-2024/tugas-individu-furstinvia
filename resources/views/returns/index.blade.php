@extends('layouts.app')

@section('title', 'Data Returns')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Returns</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('returns.create') }}" class="btn btn-primary mb-3">Tambah Return</a>

        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Alasan Pengembalian</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($returns as $return)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $return->barang->nama_barang }}</td>
                        <td>{{ $return->return_reason }}</td>
                        <td>{{ $return->return_date }}</td>
                        <td>{{ $return->status }}</td>
                        <td>
                            <a href="{{ route('returns.edit', $return->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <form action="{{ route('returns.destroy', $return->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $returns->links() }}
        </div>
    </div>
</div>
@endsection
