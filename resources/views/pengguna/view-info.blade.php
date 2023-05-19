@extends('layouts.main')

@section('Isi')
<div class="col-12 p-1 mb-1">
	<div class="card">
		<div class="card-body m-2">
			<div class="mb-2">
				<img  class="img-fluid rounded mx-auto d-block" src="/images/{{ $info->gambar }}" alt="">
			</div>

			<div>
				<h2> {{ $info->judul }}</h2>
				<h6> <small class="text-muted">{{ $info->created_at  }}</small></h6>
				<p>
					{{ $info->deskripsi }}
				</p>
			</div>
		</div>
	</div>
</div>
@endsection