<?php $__env->startSection('title','Categories'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Category List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="category-add" class="btn btn-primary">Add Data</a>
    </div>
    <div class="mt-5">
        <table class="table">
            <thread>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thread>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>
                            <a href="#">edit</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectPribadi\renting\resources\views/category.blade.php ENDPATH**/ ?>