@extends('layouts.app')

@section('title', 'Data Payments')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Payments</h6>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <a href="{{ route('payments.create') }}" class="btn btn-primary mb-3">Tambah Payment</a>

        <!-- Topbar Search -->
        <form action="{{ route('payments.search') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
          <!-- Back to Payments Button -->
          <a href="{{ route('payments.index') }}" class="btn btn-secondary">
            <i class="fas fa-list"></i> Data Payments
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Metode Pembayaran</th>
              <th>Jumlah</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($payments as $payment)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->status }}</td>
                <td>
                  <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-success btn-sm">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline;">
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
        {{ $payments->links() }}
      </div>
    </div>
  </div>
@endsection
