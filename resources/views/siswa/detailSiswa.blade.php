@extends('../layouts/header')

@section('content')

<div class="card pt-4 pb-5 mb-3">
	<div class="row">
		<div class="col-sm-4">
			<a href="/siswa" class="ml-5 btn btn-info text-light">
				<span class="fa fa-arrow-left"></span>
				Kembali
			</a>
		</div>
		<div class="col-sm-4">
			<h3 class="font-weight-normal text-center">Detail data siswa</h3>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-6 text-center">
			<img src="{{ asset('uploads/foto/'.$siswa->foto) }}" class="img-thumbnail" width="240">
		</div>
		<div class="col-md-6">
			<p>NIS : {{ $siswa->nomor_induk }}</p>
			<p>Nama : {{ $siswa->name }}</p>
			<p>Kelas : {{ $siswa->kelas }}</p>
			<p>Agama : {{ $siswa->agama }}</p>
			<p>Email : {{ $siswa->email }}</p>
			<p>Alamat : {{ $siswa->alamat }}</p>
			<p>Kontak : {{ $siswa->kontak }}</p>
		</div>
	</div>
</div>

@endsection