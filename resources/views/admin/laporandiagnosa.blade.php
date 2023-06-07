@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <a href="{{ route('cetaklaporanD',) }}"  target="_blank" class="btn btn-primary mdi mdi-printer"> Cetak Laporan</a>
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
                                    Posyandu
                                </th>
                                <th>
                                    Diagnosa
                                </th>
                              
                                <th>
                                    Tanggal Diagnosa
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                              $no =1;
                          @endphp
                            @foreach ($diagnosa as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->balita->ortu->name }}</td>
                                    <td>{{ $item->balita->nama_balita }}</td>
                                    <td>{{ $item->balita->ortu->posyandu->nama_posyandu }}</td>
                                    <td>{{ $item->hasil_diagnosa }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
