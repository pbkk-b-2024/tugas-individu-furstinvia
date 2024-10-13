@extends('layouts.app')

@section('title', 'Tambah Return')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Return</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('returns.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_id">Produk</label>
                <select name="product_id" id="product_id" class="form-control">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="return_reason">Alasan Pengembalian</label>
                <textarea name="return_reason" id="return_reason" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="return_date">Tanggal Pengembalian</label>
                <input type="date" name="return_date" id="return_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                    <option value="refunded">Refunded</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('returns.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
