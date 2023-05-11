@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Aturan Metode</h4>
            <a href="{{ route('tambah-informasi') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Informasi</a>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Keterangan
                    </th>
                    <th>
                      Deskripsi
                    </th>
                    <th>
                      Aksi 
                    </th>
                  </tr>
                </thead>
                <tbody>
                   
                  {{-- @json($informasi) --}}
                  @foreach ($informasi as $item) 
                  <tr>
                    <td>
                      {{ $item->keterangan }}
                    </td>
                    <td>
                      {{ $item->deskripsi }}
                    </td>
                    <td class="text-center">
                      <a href="{{ route('edit-informasi',$item->idinformasi) }}" class="btn btn-primary btn-rounded btn-fw"  >Edit</a>
                      <a href="{{ route('delete-informasi', $item->idinformasi) }}" class="btn btn-danger btn-rounded btn-fw">Delete</a>
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
