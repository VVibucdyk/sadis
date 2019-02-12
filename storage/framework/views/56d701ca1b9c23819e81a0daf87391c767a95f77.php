<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <img src="<?php echo e(asset('img/default.png')); ?>" class="img-circle" style="border: 2px solid black" width="50">
                    <h5><?php echo e(Auth::user()->nis); ?></h5>
                    <h5><?php echo e(Auth::user()->name); ?></h5>
                </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Beranda</a>
                        <a href="#" class="list-group-item">Data Siswa</a>
                        <a href="#" class="list-group-item">Absensi</a>
                        <a href="#" class="list-group-item">Whatsapp</a>
                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>