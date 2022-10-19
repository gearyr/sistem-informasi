

<?php $__env->startSection('title','Delete Category'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Are you sure to delete book <?php echo e($book->title); ?>?</h2>
    <div class="mt-4">
        <a href="/book-destroy/<?php echo e($book->slug); ?>" class="btn btn-danger me-2">Sure</a>
        <a href="/books" class="btn btn-info">Cancel</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectPribadi\renting\resources\views/book-delete.blade.php ENDPATH**/ ?>