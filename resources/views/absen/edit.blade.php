@extends('layouts/header')

@section('content')

<div class="card card pt-4 pb-3 mb-4">
	<div class="container">
		<h4 class="text-center">Edit data</h4>
		<div class="card-body">
			<form action="/absen/{{ $absen->nomor_induk }}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="">NIS</label>
					<input type="text" name="nomor_induk" placeholder="Masukan nomor induk" value="{{ $absen->nomor_induk }}" class="form-control">
					{{ ($errors->has('nis')) ? $errors->first('nis') : '' }}
				</div>

				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" name="nama" placeholder="Masukan nama" value="{{ $absen->nama }}" class="form-control">
					{{ ($errors->has('nama')) ? $errors->first('nama') : '' }}
				</div>

				<div class="form-group">
					<label for="">Kelas</label>
					<input type="text" name="kelas" placeholder="Masukan kelas" value="{{ $absen->kelas }}" class="form-control"> 
					{{ ($errors->has('kelas')) ? $errors->first('kelas') : '' }}
				</div>

				<input type="hidden" name="_method" value="put">
				<input type="submit" name="submit" value="Edit" class="btn btn-outline-primary">
				<a class="btn btn-outline-danger" href="/absen">Batalkan edit</a>
			</form>
		</div>
	</div>
</div>
@endsection