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
<div class="custom-add">
    <a href="<?php echo e(URL::to('addpro')); ?>"><button class="btn btn-primary btn-sm" type="button">New</button></a>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <?php for($i=0;$i<8;$i++): ?>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        [ INFO ]
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                            $10
                        </span>
                        <small class="text-muted">Category</small>
                        <a href="#" class="product-name"> Product</a>



                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">

                          <a href="<?php echo e(URL::to('detail')); ?>" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                          <a href="<?php echo e(URL::to('edit')); ?>" class="btn btn-xs btn-outline btn-primary">Edit <i class="fa fa-long-arrow-right"></i> </a>
                            <a href="#" class="btn btn-xs btn-outline label label-danger prodel">Deleted <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endfor; ?>
    </div>
