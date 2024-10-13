@extends('layouts.app')

@section('title', 'Detail Membership')

@section('contents')
  <div class="container">
    <h1>Detail Membership</h1>
    <p><strong>Nama Member:</strong> {{ $membership->nama_member }}</p>
    <p><strong>Email:</strong> {{ $membership->email }}</p>
    <p><strong>Status:</strong> {{ $membership->status }}</p>

    <a href="{{ route('memberships.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
@endsection
