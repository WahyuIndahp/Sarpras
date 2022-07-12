<!DOCTYPE html>
<html>

<head>
    @include('fix.title')

    <style type="text/css">
        .responsive {
           width: 100%;
           max-width: 130px;
           height: auto;
        }
      </style>
      
</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            @include('fix.logo')

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li>
                            <h3 >Selamat anda berhasil login sebagai {{auth()->user()->level}}!</h3>
                        </li>
                    </ul>

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        @include('fix.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-11">

                            <div class="card-box task-detail col-sm-offset-2" >
                                <div class="row">
                                    <div class="clearfix">
                                        <div>
                                            <h3 style="text-align:center;">SELAMAT DATANG DI HALAMAN DASHBOARD</h3>
                                        </div>
                                        <div>
                                            <h3 class="logo" style="text-align:center;">SDN Kebonsari 3 Malang</h3>
                                        </div>                        
                                    </div>
                                    <hr>
                                    <div class="portfolioContainer"> 
                                        <div class="attached-files">
                                            <div class="files-list">
                                                <div style="text-align:center;">
                                                        <img width="250" height="250" src="https://matamaja.com/wp-content/uploads/2021/08/53-2.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- cardbox -->
                        </div><!-- end col -->
                    </div><!-- end row -->  
                </div>
            <!-- content -->

            @include('fix.footer')
        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        @include('fix.rightsb')
        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <script>
    var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/pages/jquery.dashboard.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>
