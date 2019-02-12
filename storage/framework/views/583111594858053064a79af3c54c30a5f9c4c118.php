<?php $__env->startSection('content'); ?>

<?php if(Session::get('message')): ?>
<div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Pemberitahuan :</span>
  <?php echo e(Session::get('message')); ?>

</div>
<?php endif; ?>


<div class="row">
	<div class="col-sm-10">
		<h2>Daftar Siswa</h2>
	</div>
	<div class="col-sm-2">
		<a class="btn btn-info p-2 text-light" href="/siswa/create">
			<span class="fa fa-plus"></span>
			Tambah Data
		</a>
	</div>
</div>

<table border="1" class="table table-bordered text-center mt-3 mb-4">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th colspan="3">Aksi</th>
	</thead>
	<?php if($siswa->count() >= 1): ?>
	<tbody>
		<?php $no = 1; ?>
		<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?=$no++; ?></td>
			<td><?php echo e($row->name); ?></td>
			<td><a href="/siswa/<?php echo e($row->id); ?>" class="btn btn-outline-info"><span class="fa fa-info"></span> Detail</a></td>
			<td><a href="/siswa/<?php echo e($row->id); ?>/edit" class="btn btn-outline-success"><span class="fa fa-pencil"></span> Edit</a></td>
			<td>
				<form action="/siswa/<?php echo e($row->id); ?>" method="post">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<input type="hidden" name="_method" value="delete">
					<input type="submit" name="name" value="Hapus" class="btn btn-outline-danger">
				</form>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	<?php else: ?>
	<tbody>
		<tr>
			<td colspan="6">Tidak ada data</td>
		</tr>
	</tbody>
	<?php endif; ?>
</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('../layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>