@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel User</h4>
            {{-- <a href="{{ route('tambah-user') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Admin</a> --}}
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
                      Jenis Kelamin
                    </th>
                    <th>
                      Tempat Lahir
                    </th>
                    <th>
                      Tanggal Lahir
                    </th>
                    <th>
                      Posyandu
                    </th>
                    <th>
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @json($user)
                  @foreach ($user as $item)
                      
                  <tr>
                    <td class="py-1">
                      {{ $item->nik }}
                    </td>
                    <td>
                      {{ $item->nama_balita }}
                    </td>
                    <td>
                      {{ $item->jenis_kelamin }}

                    </td>
                    <td>
                      {{ $item->tempat_lahir }}

                    </td>
                    <td>
                      {{ $item->tanggal_lahir }}

                    </td>
                    <td>
                      {{ $item->posyandu }}
                    </td>
                    <td>
                      {{ $item->perkembangan }}
                    </td>
                    {{-- <td>
                      <a href="{{ route('edit-user',$item->id_user) }}" class="btn btn-primary btn-rounded btn-fw">Edit</a>
                      <a href="{{ route('delete-user', $item->id_user) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                    </td> --}}
                  </tr>
                  @endforeach 
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

   
@endsection
