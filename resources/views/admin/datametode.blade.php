@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Aturan Metode</h4>
            <a href="{{ route('tambah-metode') }}" class="btn btn-primary btn-rounded btn-fw">Tambah Aturan</a>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Panjang Badan
                    </th>
                    <th>
                      Jenis Kelamin
                    </th>
                    <th>
                      Umur
                    </th>
                    <th>
                      Status
                    </th>
                    <th class="text-center">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      50
                    </td>
                    <td>
                      Perempuan
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      Stunting
                    </td>
                    <td class="text-center">
                      <a href="" class="btn btn-primary btn-rounded btn-fw"  >Edit</a>
                      <a href="" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                      </a>
                    </td>
                  </tr>
                  {{-- @json($admin) --}}
                  {{-- @foreach ($perkembangan as $item)
                      
                  <tr>
                    <td>
                      {{ $item->balita->nama_balita }}
                    </td>
                    <td class="B-1">
                      {{ $item->panjang_badan }}
                    </td>
                    <td>
                      {{ $item->umur }}
                    </td>
                    <td>
                      {{ $item->status }}

                    </td> --}}
                   
                  {{-- </tr>
                  @endforeach --}}
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

   
@endsection
