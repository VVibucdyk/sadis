<?php $__env->startSection('content'); ?>

<div class="card card pt-4 pb-3 mb-4">
	<div class="container">
		<h4 class="text-center">Edit data</h4>
		<div class="card-body">
			<form action="/siswa" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">nomor_induk</label>
							<input type="text" name="nomor_induk" placeholder="Masukan nomor_induk" class="form-control">
							<?php echo e(($errors->has('nomor_induk')) ? $errors->first('nomor_induk') : ''); ?>

						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="name" placeholder="Masukan nama" class="form-control">
							<?php echo e(($errors->has('nama')) ? $errors->first('nama') : ''); ?>

						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="">Kelas</label>
							<select name="kelas" class="form-control">
								<option disabled selected>--Belum diset--</option>
								<?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($dat->nama_kelas); ?>"><?php echo e($dat->nama_kelas); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>  
							<?php echo e(($errors->has('kelas')) ? $errors->first('kelas') : ''); ?>

						</div>
					</div>

				</div>

				<input type="submit" name="submit" value="Tambah" class="btn btn-outline-primary">
				<a class="btn btn-outline-danger" href="/siswa">Kembali</a>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>