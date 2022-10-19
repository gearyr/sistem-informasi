<?php $__env->startSection('title','Delete User'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Are you sure to delete User <?php echo e($user->username); ?>?</h2>
    <div class="mt-4">
        <a href="/user-destroy/<?php echo e($user->slug); ?>" class="btn btn-danger me-2">Sure</a>
        <a href="/users" class="btn btn-info">Cancel</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectPribadi\renting\resources\views/user-delete.blade.php ENDPATH**/ ?>