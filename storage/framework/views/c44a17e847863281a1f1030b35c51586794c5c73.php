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
	<?php if($absen->count() >= 1): ?>
	<tbody>
		<?php $no = 1; ?>
		<?php $__currentLoopData = $absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?=$no++; ?></td>
			<td><?php echo e($row->nomor_induk); ?></td>
			<td><?php echo e($row->nama); ?></td>
			<td><?php echo e($row->kelas); ?></td>
			<td><?php echo e(date('M d, Y. H:i',strtotime($row->created_at))); ?></td>
			<td><a href="/absen/<?php echo e($row->nis); ?>/edit" class="btn btn-outline-success">Edit</a></td>
			<td>
				<form action="/absen/<?php echo e($row->id); ?>" method="post">
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

<?php echo e($absen->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>