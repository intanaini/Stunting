@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel Aturan</h4>
            <a href="{{ route('tambah-aturan') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Admin</a>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Jenis Kelamin
                    </th>
                    <th>
                      Umur
                    </th>
                    <th>
                      Panjang Badan
                    </th>
                    <th>
                      Penyakit
                    </th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @json($user) --}}
                  @foreach ($aturan as $item)
                      
                  <tr>
                    <td class="py-1">
                      {{ $item->jenis_kelamin }}
                    </td>
                    <td>
                      {{ $item->umur }}
                    </td>
                    <td>
                      {{ $item->panjang_badan }}

                    </td>
                    <td>
                      {{ $item->penyakit }}

                    </td>
                    <td>
                      <a href="{{ route('edit-aturan',$item->idaturan) }}" class="btn btn-primary btn-rounded btn-fw">Edit</a>
                      <a href="{{ route('delete-aturan', $item->idaturan) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

   
@endsection
