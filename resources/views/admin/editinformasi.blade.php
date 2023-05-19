@extends('layouts.main')

@section('Isi')
    <div class="main-panel w-100">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12  stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Informasi</h4>
                            <form method="POST" action="{{ route('update-informasi', $informasi->idinformasi) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <td>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <input type="file" name="gambar" id="gambar">
                                          </li>
                                      </ul>
                                  </td>
                                  @error('gambar')
                                      <span class="text-danger">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                                <div class="form-group">
                                    <label for="exampleInputConfirmPassword1">Judul</label>
                                    <input value=" {{ $informasi->judul }} " type="text" class="form-control"
                                        id="judul" name="judul" placeholder="Judul">
                                    @error('judul')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <input value=" {{ $informasi->deskripsi }}" type="text" class="form-control"
                                        id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                                    @error('deskripsi')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
