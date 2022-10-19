<?php $__env->startSection('title','Books'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Book List</h1>

    <div class="my-5 d-flex justify-content-end">
        <a href="book-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
        <a href="book-add" class="btn btb-primary">Add Data</a>
    </div>

    <div class="mt-5">
        <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
    </div>


    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</</th>
                    <th>Code</</th>
                    <th>Title</</th>
                    <th>Category</th>
                    <th>Status</</th>
                    <th>Action</</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop ->iteration); ?></td>
                        <td><?php echo e($item->book_code); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td>
                            <?php $__currentLoopData = $item->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($category->name); ?> <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td><?php echo e($item->status); ?></td>
                        <td>
                            <a href="/book-edit/<?php echo e($item->slug); ?>">edit</a>
                            <a href="book-delete/<?php echo e($item->slug); ?>">delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectPribadi\renting\resources\views/book.blade.php ENDPATH**/ ?>