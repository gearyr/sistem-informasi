<?php $__env->startSection('title','Delete Category'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Are you sure to delete category <?php echo e($category->name); ?>?</h2>
    <div class="mt-4">
        <a href="/category-destroy/<?php echo e($category->slug); ?>" class="btn btn-danger me-2">Sure</a>
        <a href="/categories" class="btn btn-info">Cancel</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectPribadi\renting\resources\views/category-delete.blade.php ENDPATH**/ ?>