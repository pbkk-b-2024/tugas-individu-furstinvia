@extends('layouts.app')

@section('title', 'Form Order')

@section('contents')
  <form action="{{ isset($order) ? route('orders.update', $order->id) : route('orders.store') }}" method="post">
    @csrf
    @if(isset($order))
      @method('PUT')
    @endif
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($order) ? 'Form Edit Order' : 'Form Tambah Order' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_order">Kode Order</label>
              <input type="text" class="form-control" id="kode_order" name="kode_order" value="{{ isset($order) ? $order->kode_order : '' }}" required>
            </div>
            <div class="form-group">
              <label for="nama_customer">Nama Customer</label>
              <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="{{ isset($order) ? $order->nama_customer : '' }}" required>
            </div>
            <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($order) ? $order->nama_barang : '' }}" required>
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ isset($order) ? $order->jumlah : '' }}" required>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
