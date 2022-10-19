<?php $__env->startSection('title','Books'); ?>

<?php $__env->startSection('content'); ?>

    <div class="my-5">
        <div class="row">

            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="card h-100" >
                        <img src=" <?php echo e($item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/no cover.png')); ?>" class="card-img-top" draggable="false" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo e($item->book_code); ?></h5>
                        <p class="card-text"><?php echo e($item->title); ?></p>
                        <p class="card-text text-end fw-bold <?php echo e($item->status == 'in stock'? 'text-success' : 'text-danger'); ?>"><?php echo e($item->status); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ProjectPribadi\renting\resources\views/book-list.blade.php ENDPATH**/ ?>