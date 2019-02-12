@extends('layouts/header')

@section('content')

<div class="card card pt-4 pb-3 mb-4">
	<div class="container">
		<h4 class="text-center">Edit data</h4>
		<div class="card-body">
			<form action="/siswa/{{ $siswa->id }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Nomor Induk</label>
							<input type="text" name="nomor_induk" placeholder="Masukan nomor_induk" value="{{ $siswa->nomor_induk }}" class="form-control">
							{{ ($errors->has('nomor_induk')) ? $errors->first('nomor_induk') : '' }}
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="name" placeholder="Masukan nama" value="{{ $siswa->name }}" class="form-control">
							{{ ($errors->has('nama')) ? $errors->first('nama') : '' }}
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Kelas</label>
							<select name="kelas" class="form-control">
								<option disabled selected>--Belum diset--</option>
								@foreach($kelas as $dat)
								<option value="{{ $dat->nama_kelas }}" <?php if ($dat->nama_kelas == $siswa->kelas){echo 'selected';}?>>{{$dat->nama_kelas}}</option>
								@endforeach
							</select>  
							{{ ($errors->has('kelas')) ? $errors->first('kelas') : '' }}
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Agama</label>
							<select name="agama" class="form-control">
								<option disabled selected>--Belum diset--</option>
								@foreach($agama as $dp)
								<option value="{{ $dp->agama }}" <?php if ($dp->agama == $siswa->agama){echo 'selected';}?>>{{$dp->agama}}</option>
								@endforeach
							</select> 
							{{ ($errors->has('agama')) ? $errors->first('agama') : '' }}
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">No.HP</label>
							<input type="text" name="kontak" placeholder="Masukan kontak" value="{{ $siswa->kontak }}" class="form-control"> 
							{{ ($errors->has('kontak')) ? $errors->first('kontak') : '' }}
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea name="alamat" cols="10" rows="3" class="form-control" placeholder="Alamat lengkap">{{ $siswa->alamat }}</textarea>
							{{ ($errors->has('alamat')) ? $errors->first('alamat') : '' }}
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Foto</label>
							<input type="file" name="foto" class="form-control"> 
							{{ ($errors->has('kontak')) ? $errors->first('kontak') : '' }}
						</div>
					</div>

					<div class="col-md-6">
						<span>Foto Sebelumnya</span><br>
						<img width="200" src="{{ url('uploads/foto/'.$siswa->foto) }}" alt="">
					</div>

				</div>

				<input type="hidden" name="_method" value="put">
				<input type="submit" name="submit" value="Edit" class="btn btn-outline-primary">
				<a class="btn btn-outline-danger" href="/siswa">Batalkan edit</a>
			</form>
		</div>
	</div>
</div>

@endsection