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
    <title>Iran coupon | Edit coupon</title>
</head>
<body>
<?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1 class="h1 m-5">Edit coupon : [<?php echo e($coupon->name); ?>]</h1>
    <div class="m-5 p-5 overflow-hidden shadow-sm sm:rounded-lg list">
        <form action="<?php echo e(route('coupon-edition')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <input name="id" value="<?php echo e($coupon->id); ?>" hidden>
            <div class="mb-3">
                <label for="name" class="form-label">Coupon name :</label>
                <input type="text" name="name" value="<?php echo e($coupon->name); ?>" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="offcode" class="form-label">Description :</label>
                <input type="text" name="description" value="<?php echo e($coupon->description); ?>" class="form-control" id="offcode">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Expiration date :</label>
                <input type="date" name="expireDate" class="form-control" id="date">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status :</label>
                <select class="form-select" name="status" id="status" aria-label="Default select example">
                    <option selected>Choose status</option>
                    <option value="valid">Valid</option>
                    <option value="expired">Expired</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="offcode" class="form-label">Offer code :</label>
                <input type="text" name="offerCode" value="<?php echo e($coupon->offer_code); ?>" class="form-control" id="offcode">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website :</label>
                <input type="text" name="website" value="<?php echo e($coupon->website); ?>" class="form-control" id="website">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image :</label>
                <input class="form-control bg-white" name="image" type="file" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\emergency\Laravel\shop\resources\views/coupon-edit-by-admin.blade.php ENDPATH**/ ?>