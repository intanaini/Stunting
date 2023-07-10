@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel Pengguna</h4>
            {{-- <a href="{{ route('tambahS-user') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Admin</a> --}}
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      NIK
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      No. Hp
                    </th>
                    <th>
                      Posyandu
                    </th>
                    {{-- <th>
                      aksi
                    </th> --}}
                  </tr>
                </thead>
                <tbody>
                  {{-- @json($user) --}}
                  @foreach ($user as $item)
                      
                  <tr>
                    <td class="py-1">
                      {{ $item->nik }}
                    </td>
                    <td>
                      {{ $item->name }}
                    </td>
                    <td>
                      {{ $item->status_users }}

                    </td>
                    <td>
                      {{ $item->no_hp }}

                    </td>
                    <td>
                      {{ $item->posyandu->nama_posyandu ?? '' }}
                    </td>
                    {{-- <td>
                      <a href="{{ route('editS-user',$item->id_user) }}" class="btn btn-primary btn-rounded btn-fw">Edit</a>
                      <a href="{{ route('deleteS-user', $item->id_user) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                    </td> --}}
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
              {{ $user->links('vendor.pagination.bootstrap-4') }}
            </div>
          </div>
        </div>
      </div>

   
@endsection
