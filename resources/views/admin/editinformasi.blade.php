@extends('layouts.main')

@section('Isi')
    <div class="main-panel w-100">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12  stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Informasi</h4>
                            <form method="POST" action="{{ route('update-informasi', $informasi->idinformasi) }}"
                                enctype="multipart/form-data">
                                @csrf
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
                                    <textarea class="form-control w-100 h-100"   id="deskripsi" name="deskripsi"
                                        rows="5">{{ $informasi->deskripsi }}</textarea>
                                    @error('deskripsi')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="gambar" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-light">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection

            @push('js')
                <script>
                    (function($) {
                        'use strict';
                        $(function() {
                            $('.file-upload-browse').on('click', function() {
                                var file = $(this).parent().parent().parent().find('.file-upload-default');
                                file.trigger('click');
                            });
                            $('.file-upload-default').on('change', function() {
                                $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i,
                                    ''));
                            });
                        });
                    })(jQuery);
                </script>
            @endpush
