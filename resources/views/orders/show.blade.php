@extends('layouts.app')

@section('title', 'Detail Order')

@section('contents')
  <div class="container my-5">
    <div class="text-center mb-4">
      <h1 class="display-4">Detail Order</h1>
      <p class="lead">Silakan periksa detail pesanan Anda di bawah ini.</p>
    </div>

    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title">Informasi Order</h5>
        <hr>
        <p><strong>Kode Order:</strong> {{ $order->kode_order }}</p>
        <p><strong>Nama Customer:</strong> {{ $order->nama_customer }}</p>
        <p><strong>Nama Barang:</strong> {{ $order->nama_barang }}</p>
        <p><strong>Jumlah:</strong> {{ $order->jumlah }}</p>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="{{ route('orders.index') }}" class="btn btn-secondary">Kembali</a>
      <button class="btn btn-primary" onclick="alert('Download!')">Download</button>
    </div>
  </div>

  <style>
    @media print {
      body {
        -webkit-print-color-adjust: exact; /* Chrome */
        color-adjust: exact; /* Firefox */
      }
      .container {
        margin: 0;
        padding: 0;
      }
      .card {
        border: none;
      }
      .btn {
        display: none; /* Hides buttons when printing */
      }
    }
  </style>
@endsection
