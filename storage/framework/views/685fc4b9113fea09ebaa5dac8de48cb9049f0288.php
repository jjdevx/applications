
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Data Tables</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>Tables</a>
            </li>
            <li class="active">
                <strong>Data Tables</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2"> 
    </div>
</div>
 <div class="wrapper wrapper-content animated fadeInRight">
    <a href="<?php echo e(URL::to('product')); ?>"><button class="btn btn-primary btn-sm" type="button">Add New</button></a>
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Basic Data Tables example with responsive plugin</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeX">
                <td>Trident</td>
                <td>Internet
                    Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td class="center">4</td>
                <td class="center">X</td>
                <td class="center"><div class="action-table-datas"><span class="label"><a href="#">Edit</a></span><span class="label label-danger"><a href="#">Delete</a></span></div></td>
            </tr> 
            </tbody>
            <tfoot>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
                <th>actions</th>
            </tr>
            </tfoot>
            </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</div> 