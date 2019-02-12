<?php $__env->startSection('title', 'Halaman atau Link Rusak!'); ?>

<?php $__env->startSection('message'); ?>
<div class="title">
	Error 404 : Halaman tidak ditemukan
</div>
<div class="title">
	<img src="<?php echo e(asset('img/404.gif')); ?>" width="200" alt="">
</div>
	<p>Aww! sepertinya kamu tersesat!, klik <a href="/">link ini</a> untuk kembali</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>