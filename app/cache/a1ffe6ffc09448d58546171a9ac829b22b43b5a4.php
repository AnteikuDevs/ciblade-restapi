

<?php $__env->startSection('body'); ?>

<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card card-login text-white">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="<?php echo e(asset()); ?>images/logo.png" alt="" class="img-fluid mb-4 w-75">
						
						
							<div class="form-group mb-3">
								<label class="floating-label" for="Username">Username</label>
								<input type="text" class="form-control" id="Username" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" class="form-control" id="Password" placeholder="">
							</div>
							<div class="custom-control custom-checkbox text-left mb-4 mt-2">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Ingat saya.</label>
							</div>
							<a href="<?php echo e(base_url('dashboard')); ?>" class="btn btn-block btn-default mb-4">Masuk</a>
						
						<p class="mb-2 text-muted">Lupa password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyServer\www\bincigar\app\views/auth/login.blade.php ENDPATH**/ ?>