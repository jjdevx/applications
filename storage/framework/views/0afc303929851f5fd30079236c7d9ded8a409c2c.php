<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - <?php echo $__env->yieldContent('title'); ?> </title>


    <link rel="stylesheet" href="<?php echo e(asset('css/vendor.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/plugins/dataTables/datatables.min.css')); ?>" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="<?php echo e(asset('css/plugins/sweetalert/sweetalert.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/plugins/iCheck/custom.css')); ?>" rel="stylesheet">

</head>
<body> 
  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        <?php echo $__env->make('layouts.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            <?php echo $__env->make('layouts.topnavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Main view  -->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script> 
    <?php if(isset($label) && $label=='product' || isset($label) && $label=='addpro'): ?>
        <?php echo $__env->make('layouts.pro-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?> 
        <?php echo $__env->make('layouts.home-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</body>
</html>
