@extends('layouts.app')

@section('title', 'Data Shipping')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Shipping</h6>
    </div>
    <div class="card-body">
      <a href="{{ route('shippings.create') }}" class="btn btn-primary mb-3">Tambah Shipping</a>

      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Alamat Pengiriman</th>
              <th>Nama Penerima</th>
              <th>No. Telepon</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($shippings as $shipping)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $shipping->shipping_address }}</td>
                <td>{{ $shipping->recipient_name }}</td>
                <td>{{ $shipping->phone_number }}</td>
                <td>{{ ucfirst($shipping->status) }}</td>
                <td>
                  <a href="{{ route('shippings.edit', $shipping->id) }}" class="btn btn-success btn-sm">Edit</a>
                  <form action="{{ route('shippings.destroy', $shipping->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $shippings->links() }}
      </div>
    </div>
  </div>
@endsection
