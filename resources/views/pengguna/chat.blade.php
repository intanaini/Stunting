@extends('layouts.main')

@section('Isi')
    <div class="continer-fluid mt-3 mx-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-rounded ">
                    <div class="card-body example ps--scrolling-y" id="messages-container"
                        style="height: 450px;overflow: scroll;">
                        {{-- <div class="card-title   "></div> --}}

                        @foreach ($pesans as $item)
                            <div class="row mb-3">


                                <div class="col-1 col-md-1 col-lg-1 col-xl-1 col-sm-1 col-xxl-1 text-center ">
                                    @if ($item->idpenerima == Auth::user()->id_user)
                                        <div class="align-items-center justify-content-between">
                                            <img class="img rounded-circle "
                                                src="{{ is_null($item->gambar) ? '/disk/images/faces/face8.jpg' : asset('/disk/images/faces/face8.jpg') }}"
                                                alt="">
                                        </div>
                                    @else
                                    @endif
                                    {{-- <img class="img rounded-circle" src="/disk/images/faces/face8.jpg" alt="Profile image"> --}}
                                </div>
                                <div class="col-10 col-md-10 col-lg-10 col-xl-10 col-sm-10 col-xxl-10 ">
                                    <div class=" d-flex justify-content-between ">
                                        @if ($item->idpenerima == Auth::user()->id_user)
                                        <div>
                                            {{ $item->pengirim->name }}
                                        </div>
                                        <div>
                                           {{ $item->tanggal }}
                                        </div>
                                        @else
                                        <div>
                                            {{ $item->tanggal }}

                                        </div>
                                        <div>
                                            {{ $item->pengirim->name }}
                                        </div>
                                        @endif
                                    </div>
                                    @if ($item->idpenerima == Auth::user()->id_user)
                                    
                                    <div class="card bg-secondary" style="border-radius: 1px 30px 30px 30px;">
                                        @else
                                        <div class="card  bg-primary" style="border-radius: 30px 1px 30px 30px;">
                                        
                                    @endif
                                        <div class="card-body text-white ">
                                            <p>
                                                {{ $item->isi_text }}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 col-md-1 col-lg-1 col-xl-1 col-sm-1 col-xxl-1 text-center">
                                    @if ($item->idpenerima == Auth::user()->id_user)
                                    @else
                                    <div class="align-items-center justify-content-between">
                                        <img class="img rounded-circle "
                                            src="{{ is_null($item->gambar) ? '/disk/images/faces/face8.jpg' : asset('/disk/images/faces/face8.jpg') }}"
                                            alt="">
                                    </div>
                                @endif
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="row mb-3">


                            <div class="col-1 col-md-1 col-lg-1 col-xl-1 col-sm-1 col-xxl-1 text-center ">
                                <img class="img rounded-circle" src="/disk/images/faces/face8.jpg" alt="Profile image">
                            </div>
                            <div class="col-10 col-md-10 col-lg-10 col-xl-10 col-sm-10 col-xxl-10 ">
                                <div class=" d-flex justify-content-between ">
                                    <div>
                                        intan superadmin
                                    </div>
                                    <div>
                                        2023-04-13 04:27:45
                                    </div>
                                </div>
                                <div class="card bg-secondary" style="border-radius: 1px 30px 30px 30px;">
                                    <div class="card-body text-white ">
                                        <p>
                                            Tujuan dari sertifikasi Certified User Experience Designer (CUXD) dari Nielsen
                                            Norman Group (NN/g) adalah untuk memberikan pengakuan dan validasi bagi para
                                            desainer pengalaman pengguna (user experience designer) yang memiliki keahlian
                                            dan pengetahuan yang dibutuhkan untuk merancang pengalaman pengguna yang baik
                                            dan efektif. Sertifikasi ini juga bertujuan untuk membantu memajukan bidang
                                            desain pengalaman pengguna (user experience design) dengan meningkatkan standar
                                            dan kualitas desain yang diterapkan di berbagai organisasi dan perusahaan.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1 col-xl-1 col-sm-1 col-xxl-1 text-center">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class=" col-1 col-md-1 col-lg-1 col-xl-1 col-sm-1 col-xxl-1 text-center">

                            </div>
                            <div class="col-10 col-md-10 col-lg-10 col-xl-10 col-sm-10 col-xxl-10 ">
                                <div class=" d-flex justify-content-between ">
                                    <div>
                                        2023-04-13 04:27:45
                                    </div>
                                    <div>
                                        nama
                                    </div>
                                </div>
                                <div class="card  bg-primary" style="border-radius: 30px 1px 30px 30px;">
                                    <div class="card-body text-white ">
                                        <p>
                                            Melalui sertifikasi CUXD, para desainer pengalaman pengguna dapat memperoleh
                                            pemahaman yang lebih baik tentang prinsip-prinsip desain yang efektif dan
                                            metode-metode penelitian yang digunakan dalam merancang pengalaman pengguna yang
                                            lebih baik.

                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-1 col-md-1 col-lg-1 col-xl-1 col-sm-1 col-xxl-1 text-center">
                                <img class="img rounded-circle" src="/disk/images/faces/face8.jpg" alt="Profile image">
                            </div>
                        </div> --}}
                    </div>

                    <div class="card-foot">
                        <form action="{{ route('kirimUser') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class=" d-flex justify-content-between p-2">
                                <input type="text" class="form-control form-control-lg" id="isi_text" name="isi_text"
                                    placeholder="Username">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        // get the div element
        var div = document.getElementById('messages-container');
        // automatically scroll to the bottom of the div when its content changes
        window.onload = function() {
            // Get the div element
            var div = document.getElementById('messages-container');
            // Scroll to the bottom of the div
            div.scrollTop = div.scrollHeight;
        };
    </script>
  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    var initialDataCount = {!! $initialDataCount !!};

    function checkForUpdates() {
        $.ajax({
            url: '/pengguna/reload-chat',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                // Compare the response with the current data count
                // If the response data count is greater than the initial data count, reload the page

                if (response.length > initialDataCount) {
                    location.reload();
                }
            }
        });
    }

    // Call the checkForUpdates function every 5 seconds
    setInterval(checkForUpdates, 5000);
</script>

@endpush
