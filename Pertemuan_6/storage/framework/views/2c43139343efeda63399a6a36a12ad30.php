<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>


                    <table class="table table-responsive">
                        <tr><th>Username</th><th>:</th><td><?php echo e($user->username); ?></td></tr>
                        <tr><th>Name</th><th>:</th><td><?php echo e($user->name); ?></td></tr>
                        <tr><th>Email</th><th>:</th><td><?php echo e($user->email); ?></td></tr>
                        <tr><th>Created At</th><th>:</th><td><?php echo e($user->created_at); ?></td></tr>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL\PWL\Pertemuan_4\Pertemuan_4\resources\views/home.blade.php ENDPATH**/ ?>