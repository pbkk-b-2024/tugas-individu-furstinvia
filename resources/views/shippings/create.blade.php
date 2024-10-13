@extends('layouts.app')

@section('title', 'Tambah Shipping')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Shipping</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('shippings.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="shipping_address">Alamat Pengiriman</label>
          <input type="text" class="form-control" id="shipping_address" name="shipping_address" required>
        </div>
        <div class="form-group">
          <label for="recipient_name">Nama Penerima</label>
          <input type="text" class="form-control" id="recipient_name" name="recipient_name" required>
        </div>
        <div class="form-group">
          <label for="phone_number">No. Telepon</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <div class="form-group">
          <label for="status">Status Pengiriman</label>
          <select class="form-control" id="status" name="status" required>
            <option value="pending">Pending</option>
            <option value="shipped">Shipped</option>
            <option value="delivered">Delivered</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
@endsection
