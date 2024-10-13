@extends('layouts.app')

@section('title', 'Edit Return')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Return</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('returns.update', $return->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="product_id">Produk</label>
                <select name="product_id" id="product_id" class="form-control">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ $return->product_id == $product->id ? 'selected' : '' }}>
                            {{ $product->nama_barang }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="return_reason">Alasan Pengembalian</label>
                <textarea name="return_reason" id="return_reason" class="form-control" required>{{ $return->return_reason }}</textarea>
            </div>
            <div class="form-group">
                <label for="return_date">Tanggal Pengembalian</label>
                <input type="date" name="return_date" id="return_date" class="form-control" value="{{ $return->return_date }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="pending" {{ $return->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ $return->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="refunded" {{ $return->status == 'refunded' ? 'selected' : '' }}>Refunded</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('returns.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
