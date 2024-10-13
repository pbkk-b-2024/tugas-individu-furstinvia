@extends('layouts.app')

@section('title', 'Edit Shipping')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Data Shipping</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('shippings.update', $shipping->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="shipping_address">Alamat Pengiriman</label>
          <input type="text" class="form-control" id="shipping_address" name="shipping_address" value="{{ $shipping->shipping_address }}" required>
        </div>
        <div class="form-group">
          <label for="recipient_name">Nama Penerima</label>
          <input type="text" class="form-control" id="recipient_name" name="recipient_name" value="{{ $shipping->recipient_name }}" required>
        </div>
        <div class="form-group">
          <label for="phone_number">No. Telepon</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $shipping->phone_number }}" required>
        </div>
        <div class="form-group">
          <label for="status">Status Pengiriman</label>
          <select class="form-control" id="status" name="status" required>
            <option value="pending" {{ $shipping->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="shipped" {{ $shipping->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
            <option value="delivered" {{ $shipping->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
@endsection
