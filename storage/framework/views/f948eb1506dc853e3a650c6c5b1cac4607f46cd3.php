<?php $__env->startSection('title', 'Main page'); ?>

<?php $__env->startSection('content'); ?>
    <?php if(isset($label)&& $label['data']=='product'): ?> 
        <?php echo View("layouts.products.index"); ?>

    <?php else: ?> 
        <?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>