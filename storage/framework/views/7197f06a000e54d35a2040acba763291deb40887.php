

<?php $__env->startSection('title','Add Category'); ?>

<?php $__env->startSection('content'); ?>
  
    <h1>Add New Category</h1>

    <div class="mt-5 w-25">
            <form action="category-add" method ="post">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="category Name">
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Save</button>
                </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectPribadi\renting\resources\views/category-add.blade.php ENDPATH**/ ?>