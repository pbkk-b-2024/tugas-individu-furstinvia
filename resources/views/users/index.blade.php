@extends('layouts.app')

@section('title', 'Users List')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-md-6">
          <!-- Optional: You can add a search field here if needed -->
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Email</th>
              <th>Level</th>
              <th>Created At</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($users as $user)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
                <td>{{ $user->created_at }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
