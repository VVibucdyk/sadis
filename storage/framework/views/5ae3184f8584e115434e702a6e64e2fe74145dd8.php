<?php $__env->startSection('title', 'Service Unavailable'); ?>

<?php $__env->startSection('message'); ?>
<div class="title">
	Maafin ya, aku lagi cape :'(
</div>
<div class="title">
	<img src="<?php echo e(asset('img/503.jpg')); ?>" width="200" alt="">
</div>
<div class="title">
	<br>
	Nanti aku balik lagi kok ! :D
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>