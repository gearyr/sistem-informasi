<?php $__env->startSection('title','Users'); ?>

<?php $__env->startSection('content'); ?>
    <h1>User List</h1>
    <div class="mt-5 d-flex justify-content-end">
        <a href="#" class="btn btn-secondary me-3">View Banned User</a>
        <a href="/registered-users"class="btn btn-primary"> New Registered User</a>
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
                            <a href="#">detail</a>
                            <a href="#">ban user</a>
                        </td>
                       </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectPribadi\renting\resources\views/user.blade.php ENDPATH**/ ?>