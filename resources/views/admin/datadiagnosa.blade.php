@extends('layouts.main')

@section('Isi')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Diagnosa</h4>
              <table class="table table-striped">
                <form action="{{ route('tambahDiagnosa') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nama balita</label>
                    <select class="js-example-basic-single w-100" id="balita" name="balita">
                      @foreach ($balita as $item)
                      <option value="{{ $item->idbalita  }}">{{ $item->nama_balita }}</option>
                      @endforeach
                    </select>
                    @error('balita')
                    <span class="text-danger" >
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Panjang Badan (CM) </label>
                    <input type="number" class="form-control" id="panjang" name="panjang" placeholder="Panjang Badan" min="1" max="100">
                      {{-- @foreach ($posyandu as $item)
                          
                      <option value="{{ $item->idposyandu }}">{{ $item->nama_posyandu }}</option>
                      @endforeach --}}
                    
                    @error('panjang')
                                      <span class="text-danger" >
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                  </div>
                <button  type="submit" class="btn btn-primary me-2">Diagnosa</button>
              </form>
              <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>
              </table>
            </div>
          </div>
        </div>
      </div>

   
@endsection
