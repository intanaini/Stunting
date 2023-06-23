@extends('layouts.main')

@section('Isi')
    <div class="card">
        <div class="card-body mt-5">
            <div class="row">
                <div class="col-6"><img src="{{ asset('disk/images/stunting.png') }}" alt="" class="w-100"></div>
                <div class="col-6">
                    {{-- @json($data)
                @json($data)
                @json($data) --}}
                    @if (!is_null($data))
                        @if ($data->hasil_diagnosa == 'stunting')
                            <h3><strong class=" text-capitalize">Balita {{ $balita->nama_balita }} Terdiagnosa
                                    Stunting</strong></h3><br>
                            <h4> Berjenis Kelamin <span class=" text-capitalize"> {{ $balita->jenis_kelamin }} </span> Karena
                                balita anda memiliki panjang <strong> {{ $panjang1 }} </strong> yang tidak sesuai
                                dengan Umur <strong> {{ $umur1 }} </strong> Berdasarkan aturan Buku KIA pada
                                Permenkes no. 2 tahun 2020 Tentang Standar Antropometri.</h4>
                        @elseif ($data->hasil_diagnosa == 'tidak stunting')
                            <h3><strong>Balita <span class=" text-capitalize"> {{ $balita->nama_balita }} </span> Tidak
                                    Terdiagnosa Stunting</strong></h3><br>
                        @endif
                    @else
                        <h2><strong>Balita Anda Memiliki Usia Lebih dari 60 Bulan</strong></h2><br>
                    @endif
                    <br>
                    <h4>Upaya Pencegahan Stunting</h4>
                    <h5>1. Ibu hamil mendapat Tablet Tambah Darah minimal 90 tablet</h5>
                    <h5>2. Pemberian Makanan Tambahan ibu hamil</h5>
                    <h5>3. Pemenuhan Gizi</h5>
                    <h5>4. Persalinan dengan dokter/bidan yang ahli</h5>
                    <h5>5. Inisiasi Menyusui Dini</h5>
                    <h5>6. Pemberian Air Susu Ibu secara ekslusif pada bayi hingga usia 6 bulan</h5>
                    <h5>7. Memberikan Makanan Pendamping ASI untuk bayi di atas 6 bulan hingga 2 tahun</h5>
                    <h5>8. Pemberian imunisasi dasar lengkap dan vitamin A</h5>
                    <h5>9. Pemantauan pertumbuhan Balita di Posyandu terdekat</h5>
                    <h5>10. Penerapan perilaku hidup bersih dan sehat</h5>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                @if ($data->hasil_diagnosa == 'stunting')
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('viewperkembangan', $viewper->idperkembangan) }}"
                            class="btn btn-primary me-2 ">Perkembangan </a>
                    @else
                        <a href="{{ route('viewperkembangan-user', $viewper->idperkembangan) }}"
                            class="btn btn-primary me-2 ">Perkembangan </a>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection
