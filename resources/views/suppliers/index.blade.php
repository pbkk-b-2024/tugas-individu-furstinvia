@extends('layouts.app')

@section('title', 'Data Suppliers')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Suppliers</h6>
    </div>
    <div class="card-body">
      <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">Tambah Supplier</a>

      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Supplier</th>
              <th>Kontak Person</th>
              <th>No. Telepon</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($suppliers as $supplier)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $supplier->supplier_name }}</td>
                <td>{{ $supplier->contact_person }}</td>
                <td>{{ $supplier->phone_number }}</td>
                <td>{{ $supplier->address }}</td>
                <td>
                  <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-success btn-sm">Edit</a>
                  <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $suppliers->links() }} <!-- Tambahkan pagination jika diperlukan -->
      </div>
    </div>
  </div>
@endsection
