@extends('layouts/header')

@section('content')

@foreach($dataSiswa as $dat)
<p>{{ $dat->nomor_induk }}</p>
@endforeach

<div class="card pt-4 pb-3 mb-4">
	<div class="container">
		<h4 class="text-center">Tambah data</h4>
		<div class="card-body">
			<form action="/absen" method="post" class="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="">NIS</label>
					<input type="text" name="nomor_induk" placeholder="Masukan Nomor Induk" class="form-control">
					{{ ($errors->has('nis')) ? $errors->first('nis') : '' }}
				</div>

				<input type="submit" name="submit" value="Absen!" class="btn btn-outline-primary">
				<a class="btn btn-outline-danger" href="/absen">Kembali</a>
			</form>
		</div>
	</div>
</div>
@endsection