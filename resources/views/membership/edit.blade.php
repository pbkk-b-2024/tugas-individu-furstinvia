@extends('layouts.app')

@section('title', 'Edit Membership')

@section('contents')
  <div class="container">
    <h1>Edit Membership</h1>
    <form action="{{ route('memberships.update', $membership->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nama_member">Nama Member</label>
        <input type="text" name="nama_member" class="form-control" value="{{ $membership->nama_member }}" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $membership->email }}" required>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">
          <option value="active" {{ $membership->status == 'active' ? 'selected' : '' }}>Active</option>
          <option value="inactive" {{ $membership->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('memberships.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
@endsection
