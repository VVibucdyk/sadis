@extends('../layouts/header')

@section('content')

@if (Session::get('message'))
<div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Pemberitahuan :</span>
  {{ Session::get('message') }}
</div>
@endif

<div class="row">
	<div class="col-sm-10">
		<h2>Daftar kehadiran</h2>
	</div>
	<div class="col-sm-2">
		<a class="btn btn-info p-2 text-light" href="/absen/create" title="Tambah data Absensi">
			<span class="fa fa-plus"></span>
			Tambah Data
		</a>
	</div>
</div>

<table border="1" class="table table-responsive-sm table-bordered text-center mt-3 mb-4">
	<thead>
		<th>No</th>
		<th>Nomor Induk</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Waktu Masuk</th>
		<th colspan="2">Aksi</th>
	</thead>
	@if($absen->count() >= 1)
	<tbody>
		<?php $no = 1; ?>
		@foreach($absen as $row)
		<tr>
			<td><?=$no++; ?></td>
			<td>{{ $row->nomor_induk }}</td>
			<td>{{ $row->nama }}</td>
			<td>{{ $row->kelas }}</td>
			<td>{{ date('M d, Y. H:i',strtotime($row->created_at)) }}</td>
			<td><a href="/absen/{{ $row->nis }}/edit" class="btn btn-outline-success">Edit</a></td>
			<td>
				<form action="/absen/{{ $row->id }}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="delete">
					<input type="submit" name="name" value="Hapus" class="btn btn-outline-danger">
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
	@else
	<tbody>
		<tr>
			<td colspan="6">Tidak ada data</td>
		</tr>
	</tbody>
	@endif
</table>

{{ $absen->links() }}
@endsection
