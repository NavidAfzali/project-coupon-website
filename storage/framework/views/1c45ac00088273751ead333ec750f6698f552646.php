<div class="container mt-5 mb-5">
    <h3 class="mb-5">Top Offers</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo e(asset('/storage/' . $coupon->image)); ?>" class="card-img-top offer" alt="logo">
                        <a href="/coupon/<?php echo e($coupon->id); ?>" class="btn stretched-link"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($coupon->name); ?></h5>
                            <p class="card-text"><?php echo e($coupon->description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
</div><?php /**PATH D:\emergency\Laravel\shop\resources\views/offers.blade.php ENDPATH**/ ?>