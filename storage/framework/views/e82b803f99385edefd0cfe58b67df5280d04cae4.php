<?php $__env->startSection('content'); ?>

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
			<img src="<?php echo e(asset('uploads/foto/'.$siswa->foto)); ?>" class="img-thumbnail" width="240">
		</div>
		<div class="col-md-6">
			<p>NIS : <?php echo e($siswa->nomor_induk); ?></p>
			<p>Nama : <?php echo e($siswa->name); ?></p>
			<p>Kelas : <?php echo e($siswa->kelas); ?></p>
			<p>Agama : <?php echo e($siswa->agama); ?></p>
			<p>Email : <?php echo e($siswa->email); ?></p>
			<p>Alamat : <?php echo e($siswa->alamat); ?></p>
			<p>Kontak : <?php echo e($siswa->kontak); ?></p>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>