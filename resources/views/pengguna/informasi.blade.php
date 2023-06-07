@extends('layouts.main')

@section('Isi')
    <div class="row">

        {{-- @foreach ($info_f as $key) --}}
        @if ($info_f)

            <div class="col-12 p-1 mb-1">
                <div class="card">
                    <div class="card-body m-2">
                        <div class="mb-2">
                                
                            
                                <img class="img-fluid rounded mx-auto d-block" src="/images/{{ $info_f->gambar }}" alt="" style=" max-height: 500px;">
                           

                        </div>

                        <div>
                            <h2> {{ $info_f->judul }}</h2>
                            <h6> <small class="text-muted">{{ $info_f->created_at }}</small></h6>
                            <p>
                                {{ $info_f->deskripsi }}
                            </p>
                        </div>

                        <a href="{{ route('viewinfo', $info_f->idinformasi) }}" class="btn btn-info btn-rounded btn-fw">
                            view more

                        </a>


                    </div>
                </div>
            </div>
            @endif

        {{-- @endforeach --}}

        
            <div class="row">
            @foreach ($info as $item)

                <div class="col-4 p-1 ">
                    <div class="card">
                        <div class="card-body m-2">
                            <div class="mb-2 text-center">
                                <img class="img-fluid " src="/images/{{ $item->gambar }}" alt="" style=" max-height: 150px;">
                            </div>

                            <div>
                                <h2> {{ $item->judul }}</h2>
                                <h6> <small class="text-muted">{{ $item->created_at }}</small></h6>
                                <p>
                                    {{ $item->deskripsi }}
                                </p>
                            </div>
                            <a href="{{ route('viewinfo', $item->idinformasi) }}" class="btn btn-info btn-rounded btn-fw">
                                view more

                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>

        </div>
        <div class="col-12 p-1 d-flex justify-content-between">
            {{-- {{ $info }} --}}
            {{ $info->links('vendor.pagination.simple-bootstrap-4') }}

        </div>

    </div>
@endsection
