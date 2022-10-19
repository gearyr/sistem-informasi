<?php $__env->startSection('title','Users'); ?>

<?php $__env->startSection('content'); ?>
    <h1> Detail user</h1>
    <div class="mt-5 d-flex justify-content-end">
        <?php if($user->status == 'inactive'): ?>
            <a href="/user-approve/<?php echo e($user->slug); ?>" class="btn btn-info me-3">Approve User</a>
        <?php endif; ?>
    </div>

    <div class="mt-5">
        <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
    </div>

    <div class="my-5 w-25">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" readonly value="<?php echo e($user->username); ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Phone</label>
            <input type="text" class="form-control" readonly value="<?php echo e($user->phone); ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <textarea name="" id="" cols="30" rows="7" class="form-control" readonly style="resize: none"><?php echo e($user->address); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" readonly value="<?php echo e($user->status); ?>">
        </div>
    </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectPribadi\renting\resources\views/user-detail.blade.php ENDPATH**/ ?>