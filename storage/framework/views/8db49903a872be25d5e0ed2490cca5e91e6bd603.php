<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $dataSiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($dat->nomor_induk); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="card pt-4 pb-3 mb-4">
	<div class="container">
		<h4 class="text-center">Tambah data</h4>
		<div class="card-body">
			<form action="/absen" method="post" class="form">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<div class="form-group">
					<label for="">NIS</label>
					<input type="text" name="nomor_induk" placeholder="Masukan Nomor Induk" class="form-control">
					<?php echo e(($errors->has('nis')) ? $errors->first('nis') : ''); ?>

				</div>

				<input type="submit" name="submit" value="Absen!" class="btn btn-outline-primary">
				<a class="btn btn-outline-danger" href="/absen">Kembali</a>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>