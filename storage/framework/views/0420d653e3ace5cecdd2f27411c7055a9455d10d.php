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
    <title>Iran coupon | all users</title>
</head>
<body>
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1 class="h1 m-5">List of all users :</h2>
        <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card m-3 cd" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title text-dark h1"><?php echo e($user->name); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($user->role); ?></h6>
                    <?php if($user->role == 'user'): ?>
                    <p class="card-text text-info h5">This user is a normal user. so you can edit his/her profile.</p>
                    <div class="d-flex">
                        <form action="<?php echo e(route('edit-user')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input name="id" value="<?php echo e($user->id); ?>" hidden>
                            
                            <input class="m-3 p-3" type="submit" value="Edit" style="color:white;background-color: blue; border-radius:7px; width:80px;">
                        </form>
                        <form action="<?php echo e(route('delete-user')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <input name="id" value="<?php echo e($user->id); ?>" hidden>
                            <input class="m-3 p-3" type="submit" value="Delete" style="color:white;background-color: red; border-radius:7px;">
                        </form>
                        <form action="<?php echo e(route('see-user-coupon')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input name="id" value="<?php echo e($user->id); ?>" hidden>
                            <input class="m-3 p-3" type="submit" value="Coupons" style="color:white;background-color: orange; border-radius:7px;">
                        </form>
                    </div>
                    <?php else: ?>
                    <p class="card-text text-danger h5">This user is an admin user. so you cannot edit his/her profile.</p>
                    <form action="<?php echo e(route('see-user-coupon')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input name="id" value="<?php echo e($user->id); ?>" hidden>
                        <input class="m-3 p-3" type="submit" value="Coupons" style="color:white;background-color: orange; border-radius:7px;">
                    </form>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>
        </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\emergency\Laravel\shop\resources\views/user-list.blade.php ENDPATH**/ ?>