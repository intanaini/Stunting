@extends('layouts.main')

@section('Isi')
<div class="card">
    <div class="card-body mt-5">
        <div class="row">
            <div class="col-6"><img src="{{ asset('disk/images/stunting.png') }}" alt="" width="590"></div>
            <div class="col-6">Balita Anda Terdiagnosa Stunting</div>
        </div>
        <div class="d-flex justify-content-end">

            <a href=""><button class="btn btn-primary me-2 ">Perkembangan</button></a>
        </div>
    </div>
</div>

@endsection