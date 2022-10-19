<?php $__env->startSection('title','Users'); ?>

<?php $__env->startSection('content'); ?>
    <h1>User List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="/user-banned" class="btn btn-secondary me-3">View Banned User</a>
        <a href="/registered-users"class="btn btn-primary"> New Registered User</a>
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
                        <th>No.</th>
                        <th>Username</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>

            </thead>
            <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->username); ?></td>
                        <td>
                            <?php if($item->phone): ?>
                            <?php echo e($item->phone); ?>

                            <?php else: ?>
                            -
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="/user-detail/<?php echo e($item->slug); ?>">detail</a>
                            <a href="/user-ban/<?php echo e($item->slug); ?>">ban user</a>
                        </td>
                       </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectPribadi\renting\resources\views/user.blade.php ENDPATH**/ ?>