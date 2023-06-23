@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Diagnosa</h4>
                <table class="table table-striped">
                    {{-- <form action="{{ route('tambahDiagnosa') }}" method="POST"> --}}
                    {{-- @csrf --}}
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama balita</label>
                        <form id="filterForm" action="{{ route('popo') }}" method="POST">
                            @method('PUT')
                            @csrf
                            <select class="js-example-basic-single w-100" id="balita" name="balita"
                                onchange="submitForm()">
                                <option value=""> Pilih Balita</option>
                                @foreach ($balita as $item)
                                    <option value="{{ $item->idbalita }}"
                                        {{ $item->idbalita == $idbalita ? 'selected' : '' }}>{{ $item->nama_balita }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                        @error('balita')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Jenis Kelamin </label>
                        <input type="text" class="form-control" value="{{ $jk }}" readonly id="jenis_kelamin"
                            name="jenis_kelamin" placeholder="Jenis Kelamin">
                        {{-- @foreach ($balita as $item)
                      <option value="{{ $item->idbalita }}">{{ $item->jenis_kelamin }}</option>
                      @endforeach --}}

                        @error('jenis_kelamin')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Umur (Bulan) </label>
                        <input type="text" class="form-control" value="{{ $bulan }}" readonly id="umur" name="umur"
                            placeholder="Umur">
                        {{-- @foreach ($balita as $item)
                      <option value="{{ $item->idbalita }}">{{ $item->jenis_kelamin }}</option>
                      @endforeach --}}

                        @error('umur')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <form action="{{ route('tambahDiagnosa') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $idbalita }}" name="balita" id="balita">
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Panjang Badan (CM) </label>
                            <input type="number" class="form-control" id="panjang" name="panjang"
                                placeholder="Panjang Badan" min="1" max="100">
                            {{-- @foreach ($posyandu as $item)
                          
                      <option value="{{ $item->idposyandu }}">{{ $item->nama_posyandu }}</option>
                      @endforeach --}}

                            @error('panjang')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Diagnosa</button>
                    </form>
                    <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <script>
        function submitForm() {
            document.getElementById("filterForm").submit();
        }
    </script>
@endpush
