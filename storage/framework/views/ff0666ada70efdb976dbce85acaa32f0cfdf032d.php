<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo $__env->yieldContent('title'); ?></h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html"><?php echo $__env->yieldContent('home'); ?></a>
            </li>
            <li>
                <a><?php echo $__env->yieldContent('type'); ?></a>
            </li>
            <li class="active">
                <strong><?php echo $__env->yieldContent('list'); ?></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2"> 
    </div>
</div>