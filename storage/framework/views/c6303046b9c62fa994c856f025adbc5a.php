
   
<?php $__env->startSection('content'); ?>
    
<div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo e($product->image); ?>" alt="">
                <div class="caption">
                    <h4><?php echo e($product->name); ?></h4>
                    <p><?php echo e($product->description); ?></p>
                    <p><strong>Price: </strong> <?php echo e($product->price); ?>$</p>
                    <p class="btn-holder"><a href="<?php echo e(route('add.to.cart', $product->id)); ?>" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NITRO\Downloads\Do-an-nhom-G-web-pizza-core\resources\views/products.blade.php ENDPATH**/ ?>