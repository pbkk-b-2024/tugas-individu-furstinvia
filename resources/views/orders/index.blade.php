@extends('layouts.app')

@section('title', 'Data Orders')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Orders</h6>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        @if (auth()->user()->level == 'Admin')
          <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Tambah Order</a>
        @endif

        <!-- Topbar Search -->
        <form action="{{ route('orders.search') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
          <!-- Back to Orders Button -->
          <a href="{{ route('orders.index') }}" class="btn btn-secondary">
            <i class="fas fa-list"></i> Data Orders
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Order</th>
              <th>Nama Customer</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              @if (auth()->user()->level == 'Admin')
                <th>Aksi</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($orders as $order)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $order->kode_order }}</td>
                <td>{{ $order->nama_customer }}</td>
                <td>{{ $order->nama_barang }}</td>
                <td>{{ $order->jumlah }}</td>
                @if (auth()->user()->level == 'Admin')
                  <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">
                      <i class="fas fa-print"></i> Cetak
                    </a>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-success btn-sm">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">
                        <i class="fas fa-trash"></i> Hapus
                      </button>
                    </form>
                  </td>
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $orders->links() }}
      </div>
    </div>
  </div>
@endsection
