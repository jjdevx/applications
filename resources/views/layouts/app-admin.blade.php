<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA - @yield('title') </title> 
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/chosen/bootstrap-chosen.css')}}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <!-- detail -->
    <link href="{{asset('css/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{asset('css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dropzone/basic.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/jasny/jasny-bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/codemirror/codemirror.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link href="{{asset('css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/> 
    <!-- Ladda style --> 
</head>
<body >
  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper--> 
    <!-- <script src="{{asset('js/app.js')}}" type="text/javascript"></script> -->

    @if( (isset($label) && $label=='product') || (isset($label) && $label=='addpro') || (isset($label) && $label=='detailpro') || (isset($label) && $label=='editpro' ) || $label=='user' || $label=='edituser' || $label=='useradd')  
        @include('layouts.pro-scripts',array('label'=>$label))
    @else
        @include('layouts.home-scripts')
    @endif
</body>
</html>
