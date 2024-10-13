@extends('layouts.app')

@section('title', 'Tambah Supplier')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Supplier</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="supplier_name">Nama Supplier</label>
          <input type="text" class="form-control" id="supplier_name" name="supplier_name" required>
        </div>
        <div class="form-group">
          <label for="contact_person">Kontak Person</label>
          <input type="text" class="form-control" id="contact_person" name="contact_person" required>
        </div>
        <div class="form-group">
          <label for="phone_number">Nomor Telepon</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <div class="form-group">
          <label for="address">Alamat</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
@endsection
