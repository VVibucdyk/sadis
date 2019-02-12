<?php $__env->startSection('content'); ?>

<div class="card card pt-4 pb-3 mb-4">
	<div class="container">
		<h4 class="text-center">Edit data</h4>
		<div class="card-body">
			<form action="/siswa/<?php echo e($siswa->id); ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Nomor Induk</label>
							<input type="text" name="nomor_induk" placeholder="Masukan nomor_induk" value="<?php echo e($siswa->nomor_induk); ?>" class="form-control">
							<?php echo e(($errors->has('nomor_induk')) ? $errors->first('nomor_induk') : ''); ?>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="name" placeholder="Masukan nama" value="<?php echo e($siswa->name); ?>" class="form-control">
							<?php echo e(($errors->has('nama')) ? $errors->first('nama') : ''); ?>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Kelas</label>
							<select name="kelas" class="form-control">
								<option disabled selected>--Belum diset--</option>
								<?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($dat->nama_kelas); ?>" <?php if ($dat->nama_kelas == $siswa->kelas){echo 'selected';}?>><?php echo e($dat->nama_kelas); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>  
							<?php echo e(($errors->has('kelas')) ? $errors->first('kelas') : ''); ?>

						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Agama</label>
							<select name="agama" class="form-control">
								<option disabled selected>--Belum diset--</option>
								<?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($dp->agama); ?>" <?php if ($dp->agama == $siswa->agama){echo 'selected';}?>><?php echo e($dp->agama); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select> 
							<?php echo e(($errors->has('agama')) ? $errors->first('agama') : ''); ?>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">No.HP</label>
							<input type="text" name="kontak" placeholder="Masukan kontak" value="<?php echo e($siswa->kontak); ?>" class="form-control"> 
							<?php echo e(($errors->has('kontak')) ? $errors->first('kontak') : ''); ?>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Alamat</label>
							<textarea name="alamat" cols="10" rows="3" class="form-control" placeholder="Alamat lengkap"><?php echo e($siswa->alamat); ?></textarea>
							<?php echo e(($errors->has('alamat')) ? $errors->first('alamat') : ''); ?>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Foto</label>
							<input type="file" name="foto" class="form-control"> 
							<?php echo e(($errors->has('kontak')) ? $errors->first('kontak') : ''); ?>

						</div>
					</div>

					<div class="col-md-6">
						<span>Foto Sebelumnya</span><br>
						<img width="200" src="<?php echo e(url('uploads/foto/'.$siswa->foto)); ?>" alt="">
					</div>

				</div>

				<input type="hidden" name="_method" value="put">
				<input type="submit" name="submit" value="Edit" class="btn btn-outline-primary">
				<a class="btn btn-outline-danger" href="/siswa">Batalkan edit</a>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>