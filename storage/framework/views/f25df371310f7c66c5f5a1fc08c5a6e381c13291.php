<?php $__env->startSection('title', 'Main page'); ?>

<?php $__env->startSection('content'); ?>
<<<<<<< HEAD
    <?php if(isset($label)&& $label['data']=='product'): ?>
        <?php echo View("layouts.products.index")->with('breadcrumb',$breadcrumb); ?>

   <?php elseif(isset($label)&& $label['data']=='addpro'): ?>
        <?php echo View("layouts.products.add")->with('breadcrumb',$breadcrumb); ?>

    <?php else: ?>
        <?php echo View("layouts.main")->with('breadcrumb',$breadcrumb); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-admin',array('label'=>$label['data']), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
=======
    <?php if(isset($label)&& $label['data']=='product'): ?> 
        <?php echo View("layouts.products.index"); ?>

    <?php else: ?> 
        <?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',array('label'=>$label['data']), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
>>>>>>> 2a3c368d0071c71161387ebf457f96f7553e26e5
