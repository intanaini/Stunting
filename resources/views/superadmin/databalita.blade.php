@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tabel Balita</h4>
                {{-- <form action="" method="GET"> --}}
                    {{-- <input type="text" name="q" placeholder="Search...">
                    <button type="submit">Search</button>
                </form> --}}
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
                            {{-- @json($user) --}}
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
                                        {{ $item->ortu->posyandu->nama_posyandu }}
                                    </td>
                                    <td>
                                        @if ($item->perkembangan->count() > 0)
                                            {{ $item->perkembangan->first()->status }}
                                        @endif
                                    </td>
                                    {{-- <td>
                      <a href="{{ route('edit-user',$item->id_user) }}" class="btn btn-primary btn-rounded btn-fw">Edit</a>
                      <a href="{{ route('delete-user', $item->id_user) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a>
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
