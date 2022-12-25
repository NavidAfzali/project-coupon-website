<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">
    <title>Iran Coupon!</title>
</head>
<body>
    
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('today-suggest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div style="text-align:center;font-size:small;" class="m-4">
            <em>When you buy through links on RetailMeNot.
                <a style="color: gray !important;" href="#">we may earn a commission.</a>
            </em>
        </div>

        <br>
        <br>
        <div class="container ads"> Your Ads place here</div>
        <br>
        <br>
        
        <?php echo $__env->make('offers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH D:\emergency\Laravel\shop\resources\views/home.blade.php ENDPATH**/ ?>