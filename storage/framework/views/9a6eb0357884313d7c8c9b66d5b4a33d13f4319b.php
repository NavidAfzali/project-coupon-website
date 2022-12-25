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
    <title>Iran coupon | <?php echo e($user->name); ?>'s coupon</title>
</head>
<body>
<?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 class="h1 m-5"><?php echo e($user->name); ?>'s coupons</h1>
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php $__currentLoopData = $user->coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card favcoupon h-100 cd">
                        <img src="<?php echo e(asset('/storage/'. $coupon->image)); ?>" class="card-img-top" alt="...">
                        <a href="/coupon/<?php echo e($coupon->id); ?>" class="btn stretched-link"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($coupon->name); ?></h5>
                            <p class="card-text"><?php echo e($coupon->description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\emergency\Laravel\shop\resources\views/coupon-list.blade.php ENDPATH**/ ?>