@extends('../layouts/header')

@section('content')

<div class="card card pt-4 pb-3 mb-4">
	<div class="container">
		<h4 class="text-center">Edit data</h4>
		<div class="card-body">
			<form action="/siswa" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">nomor_induk</label>
							<input type="text" name="nomor_induk" placeholder="Masukan nomor_induk" class="form-control">
							{{ ($errors->has('nomor_induk')) ? $errors->first('nomor_induk') : '' }}
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="name" placeholder="Masukan nama" class="form-control">
							{{ ($errors->has('nama')) ? $errors->first('nama') : '' }}
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="">Kelas</label>
							<select name="kelas" class="form-control">
								<option disabled selected>--Belum diset--</option>
								@foreach($kelas as $dat)
								<option value="{{ $dat->nama_kelas }}">{{$dat->nama_kelas}}</option>
								@endforeach
							</select>  
							{{ ($errors->has('kelas')) ? $errors->first('kelas') : '' }}
						</div>
					</div>

				</div>

				<input type="submit" name="submit" value="Tambah" class="btn btn-outline-primary">
				<a class="btn btn-outline-danger" href="/siswa">Kembali</a>
			</form>
		</div>
	</div>
</div>

@endsection