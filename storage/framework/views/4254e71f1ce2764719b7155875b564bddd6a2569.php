

<?php $__env->startSection('title','Deleted Category'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Deleted Book List </h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="/books" class="btn btn-secondary me-3">Back</a>
    </div>
    <div class="mt-5">
        <table class="table">
            <thread>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thread>
            <tbody>
                <?php $__currentLoopData = $deletedBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->book_code); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td>
                            <a href="/book-restore/<?php echo e($item->slug); ?>">restore</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectPribadi\renting\resources\views/book-deleted-list.blade.php ENDPATH**/ ?>