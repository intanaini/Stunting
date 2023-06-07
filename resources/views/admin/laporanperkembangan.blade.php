@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <a href="{{ route('cetaklaporanP',) }}" target="_blank" class="btn btn-primary mdi mdi-printer"> Cetak Laporan</a>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Nama Orang Tua
                                </th>
                                <th>
                                    Nama Balita
                                </th>
                                <th>
                                    Panjang Badan
                                </th>
                                <th>
                                    Umur
                                </th>
                                <th>
                                    Status
                                </th>

                                <th>
                                    Posyandu
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($perkembangan as $key)
                                <tr>
                                    <td>{{ $no++ }}</td>

                                    <td>{{ $key->balita->ortu->name }}</td>
                                    <td>{{ $key->balita->nama_balita }}</td>
                                    <td>{{ $key->panjang_badan }}</td>
                                    <td>{{ $key->balita->tanggal_lahir->diffInMonths(\Carbon\Carbon::now()).' Bulan' }}</td>
                                    <td>{{ $key->status }}</td>
                                    <td>{{ $key->balita->ortu->posyandu->nama_posyandu }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
