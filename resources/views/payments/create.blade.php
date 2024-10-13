@extends('layouts.app')

@section('title', 'Tambah Payment')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Payment</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="payment_method">Metode Pembayaran</label>
          <input type="text" class="form-control" id="payment_method" name="payment_method" required>
        </div>
        <div class="form-group">
          <label for="amount">Jumlah</label>
          <input type="number" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
@endsection
