
<?php $__env->startSection('body'); ?>
<div class="auth-wrapper maintance">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <img src="<?php echo e(asset()); ?>images/maintance/404.png" alt="" class="img-fluid">
                    <h5 class="text-muted my-4">404 - <?php echo e($message); ?></h5>
                    <a href="<?php echo e(base_url()); ?>" class="btn waves-effect waves-light btn-primary mb-4"><i class="feather icon-refresh-ccw mr-2"></i>Ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.default_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyServer\www\bincigar\app\views/my_errors/error_404.blade.php ENDPATH**/ ?>