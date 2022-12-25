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
    <title>Iran coupon | Edition</title>
</head>
<body>
    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1 class="h1 m-5">Edit User : [<?php echo e($user->name); ?>]</h1>
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <form action="<?php echo e(route('edition')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>

            <input name="id" value="<?php echo e($user->id); ?>" hidden>
            <div class="mb-3">
                <label for="name" class="form-label">Name :</label>
                <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="offcode" class="form-label">Email :</label>
                <input type="text" name="email" value="<?php echo e($user->email); ?>" class="form-control" id="offcode">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Password :</label>
                <input type="text" name="password" class="form-control" id="website">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role :</label>
                <select class="form-select" name="role" id="status" aria-label="Default select example">
                    <option selected>Choose role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\emergency\Laravel\shop\resources\views/user-edit-by-admin.blade.php ENDPATH**/ ?>