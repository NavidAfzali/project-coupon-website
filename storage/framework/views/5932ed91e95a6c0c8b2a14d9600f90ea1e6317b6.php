<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet">
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(Auth::user()->name . '\'s ' . __('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg list">
                
                <table class="table table-borderless align-middle">
                    <thead class="h2">
                        <tr class="text-white">
                            <th scope="col"></th>
                            <th scope="col">Email</th>
                            <th scope="col">Cash</th>
                            <th scope="col">Coupon used</th>
                        </tr>
                        <tr class="h4" style="color:pink;">
                            <td></td>
                            <td><?php echo e(auth()->user()->email); ?></td>
                            <td>12.5 $</td>
                            <td><?php echo e($count); ?></td>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>

    <div class="py-12" style="margin-top: -40px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg list">
                <div class="p-6 mb-5 h3">
                    Coupons that you've tried to use:
                </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4 m-5">
                        <?php $__currentLoopData = $user->coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <div class="card favcoupon h-100 cd">
                                    <img src="<?php echo e(asset('/storage/' . $coupon->image)); ?>" class="card-img-top" alt="...">
                                    <a href="/coupon/<?php echo e($coupon->id); ?>" class="btn stretched-link"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($coupon->name); ?></h5><hr>
                                        <p class="card-text"><?php echo e($coupon->description); ?></p>
                                    </div>
                                    </div>
                                </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\emergency\Laravel\shop\resources\views/dashboard.blade.php ENDPATH**/ ?>