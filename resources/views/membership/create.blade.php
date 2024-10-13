@extends('layouts.app')

@section('title', 'Tambah Membership')

@section('contents')
  <div class="container">
    <h1>Tambah Membership</h1>
    <form action="{{ route('memberships.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="nama_member">Nama Member</label>
        <input type="text" name="nama_member" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ route('memberships.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
@endsection
