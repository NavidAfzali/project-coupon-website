<p class="mt-5 text-center head">Shop Today's Trending Deals and Save Big</p>
<?php if(count($coupons)>0): ?>
<div class="container col-expand-lg text-center mt-5">
<div class="row">
<div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="<?php echo e(asset('/storage/' . $coupons[3]->image)); ?>" class="card-img haraji" alt="tools">
            <a href="/coupon/<?php echo e($coupons[3]->id); ?>" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;"><?php echo e($coupons[3]->name); ?></h4>
                    <p class="card-text" style="margin-left: 15px;"><small>Last updated 7 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="<?php echo e(asset('/storage/' . $coupons[5]->image)); ?>" class="card-img haraji" alt="tools">
            <a href="/coupon/<?php echo e($coupons[5]->id); ?>" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;"><?php echo e($coupons[5]->name); ?></h4>
                    <p class="card-text" style="margin-left: 15px;"><small>Last updated 7 mins ago</small></p>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center text-bg-light cd">
            <img src="<?php echo e(asset('/storage/' . $coupons[0]->image)); ?>" class="card-img haraji" alt="tools">
            <a href="/coupon/<?php echo e($coupons[0]->id); ?>" class=" stretched-link"></a>
            <div class="card-img-overlay">
                <div class="a2">
                    <h4 class="card-title" style="margin-left: 15px;"><?php echo e($coupons[0]->name); ?></h4>
                    <p class="card-text" style="margin-left: 15px;"><small>Last updated 7 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
<?php else: ?>
<p class="text-muted h2">No suggestion today. come tommorow!</p>
<?php endif; ?>
<?php /**PATH D:\emergency\Laravel\shop\resources\views/today-suggest.blade.php ENDPATH**/ ?>