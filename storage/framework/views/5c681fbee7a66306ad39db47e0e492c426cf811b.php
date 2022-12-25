<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('/js/copy-text.js')); ?>"></script>
    <title><?php echo e('Coupon | ' . $name); ?></title>
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       

        <div class="card m-5 cd" style="max-width: 80%;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="<?php echo e(asset('/storage/' . $image)); ?>" class="img-fluid rounded-start h-100" alt="brand-image">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title h1"><?php echo e($name); ?></h5><hr>
                    <p class="card-text text-muted h5 mt-1"><?php echo e($description); ?></p>
                    <?php if($status == 'valid'): ?>
                    <p class="card-text"><p class="mt-1 h3 text-success"><?php echo e($status); ?></p>
                    <p class="text-warning h5">Will work until <?php echo e($expireDate); ?></p>
                    <input class="mt-3 offcode" type="text" value=<?php echo e($offerCode); ?> id="myInput" readonly>
                    <button class="copybot" onclick="myFunction()">Copy</button>
                    <a href="<?php echo e($website); ?>" class="cpref">Visit <?php echo e($website); ?></a>
                    </p>
                    <?php else: ?>
                    <p class="card-text"><p class="mt-1 h3 text-danger"><?php echo e($status); ?></p></p>
                    <p class="mt-5 h5 text-dark">This coupon is expired and already invalid.wait for new coupons in the future!</p>
                    <a href="<?php echo e($website); ?>" class="cpref m-1">Visit <?php echo e($website); ?></a>
                    <?php endif; ?>
                </div>
                </div>
            </div>
        </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\emergency\Laravel\shop\resources\views/coupon.blade.php ENDPATH**/ ?>