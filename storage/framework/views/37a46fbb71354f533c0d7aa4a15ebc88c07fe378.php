<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <title>Iran coupon | Coupons</title>
</head>
<body>
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card favcoupon h-100 cd">
                        <img src="<?php echo e(asset('/storage/'. $coupon->image)); ?>" class="card-img-top" alt="...">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                        <a href="/coupon/<?php echo e($coupon->id); ?>"></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isUser')): ?>
                        <a href="/coupon/<?php echo e($coupon->id); ?>" class="btn stretched-link"></a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($coupon->name); ?></h5>
                            <p class="card-text"><?php echo e($coupon->description); ?></p>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                                <div class="d-flex">
                                    <form action="<?php echo e(route('edit-coupon')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input name="id" value="<?php echo e($coupon->id); ?>" hidden>
                                        <input class="m-1 p-2" type="submit" value="Edit" style="color:white;background-color: blue; border-radius:7px; width:70px;">
                                    </form>
                                    <form action="<?php echo e(route('delete-coupon')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <input name="id" value="<?php echo e($coupon->id); ?>" hidden>
                                        <input class="m-1 p-2" type="submit" value="Delete" style="color:white;background-color: red; border-radius:7px;">
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\emergency\Laravel\shop\resources\views/all-coupons.blade.php ENDPATH**/ ?>