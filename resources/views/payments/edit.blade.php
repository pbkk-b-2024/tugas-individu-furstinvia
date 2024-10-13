@extends('layouts.app')

@section('title', 'Edit Payment')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Payment</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('payments.update', $payment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="payment_method">Metode Pembayaran</label>
          <input type="text" class="form-control" id="payment_method" name="payment_method" value="{{ $payment->payment_method }}" required>
        </div>
        <div class="form-group">
          <label for="amount">Jumlah</label>
          <input type="number" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}" required>
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" class="form-control" id="status" name="status" value="{{ $payment->status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('payments.index') }}" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>
@endsection
