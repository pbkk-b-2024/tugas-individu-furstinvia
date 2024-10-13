@extends('layouts.app')

@section('title', 'Data Membership')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Membership</h6>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <a href="{{ route('memberships.create') }}" class="btn btn-primary mb-3">Tambah Membership</a>

        <!-- Topbar Search -->
        <form action="{{ route('memberships.search') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
            <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>

        <div class="col-md-4 text-right">
          <!-- Back to Memberships Button -->
          <a href="{{ route('memberships.index') }}" class="btn btn-secondary">
            <i class="fas fa-list"></i> Data Membership
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Member</th>
              <th>Email</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($memberships as $membership)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $membership->nama_member }}</td>
                <td>{{ $membership->email }}</td>
                <td>{{ $membership->status }}</td>
                <td>
                  <a href="{{ route('memberships.show', $membership->id) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-print"></i> Cetak
                  </a>
                  <a href="{{ route('memberships.edit', $membership->id) }}" class="btn btn-success btn-sm">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $memberships->links() }}
      </div>
    </div>
  </div>
@endsection
