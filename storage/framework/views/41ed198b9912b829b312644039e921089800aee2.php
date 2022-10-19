<?php $__env->startSection('title','Deleted Category'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Deleted Category</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="categories" class="btn btn-secondary me-3">Back</a>
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
                <?php $__currentLoopData = $deletedCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>
                            <a href="category-restore/<?php echo e($item->slug); ?>">restore</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectPribadi\renting\resources\views/category-deleted-list.blade.php ENDPATH**/ ?>