<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo e(strtoupper($breadcrumb['title'])); ?></h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html"><?php echo e(strtoupper($breadcrumb['home'])); ?></a>
            </li>
            <li>
                <a><?php echo e(strtoupper($breadcrumb['type'])); ?></a>
            </li>
            <li class="active">
                <strong><?php echo e(strtoupper($breadcrumb['action'])); ?></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
