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
                    
                    <h2><strong>Balita Anda Terdiagnosa Stunting</strong></h2><br>
                    <h3>Karena balita anda memiliki panjang <strong> {{ $panjang1 }} </strong> yang tidak sesuai dengan Umur <strong> {{ $umur1 }} </strong> Berdasarkan aturan Buku KIA pada Permenkes no. 2 tahun 2020 Tentang Standar Antropometri.</h3>
                    @elseif ($data->hasil_diagnosa =='tidak stunting')
                    <h2><strong>Balita Anda Tidak Terdiagnosa Stunting</strong></h2><br>
                    @endif

                @else
                <h2><strong>Balita Anda Memiliki Usia Lebih dari 60 Bulan</strong></h2><br>
                
                @endif
                <br><h4>Upaya Pencegahan Stunting</h4>
                <h6>1. Ibu hamil mendapat Tablet Tambah Darah minimal 90 tablet</h6>
                <h6>2. Pemberian Makanan Tambahan ibu hamil</h6>
                <h6>3. Pemenuhan Gizi</h6>
                <h6>4. Persalinan dengan dokter/bidan yang ahli</h6>
                <h6>5. Inisiasi Menyusui Dini</h6>
                <h6>6. Pemberian Air Susu Ibu secara ekslusif pada bayi hingga usia 6 bulan</h6>
                <h6>7. Memberikan Makanan Pendamping ASI untuk bayi di atas 6 bulan hingga 2 tahun</h6>
                <h6>8. Pemberian imunisasi dasar lengkap dan vitamin A</h6>
                <h6>9. Pemantauan pertumbuhan Balita di Posyandu terdekat</h6>
                <h6>10. Penerapan perilaku hidup bersih dan sehat</h6>
            </div>
        </div>
        <div class="d-flex justify-content-end">

            <a href="{{ route('dataperkembangan') }}" class="btn btn-primary me-2 ">Perkembangan </a>
        </div>
    </div>
</div>

@endsection