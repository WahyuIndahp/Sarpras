<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    @include('fix.title')

    <!-- Plugins css-->
    <link href="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />

    <!-- DataTables -->
    <link href="/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="/assets/js/modernizr.min.js"></script>
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
                            <h4 class="page-title">DETAIL DATA INVENTARIS</h4>
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
        <div class="content-page"><!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-11 ">
                            <div class="m-b-30">
                                <a href="/datainventaris" type="button" class="btn btn-primary"><i class="fa fa-back"> </i>
                                    Back</a>

                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light pull-right"><i class="fa fa-print"></i> Unduh Detail</a>
                            </div>

                            <div class="card-box task-detail col-sm-offset-1">
                                <div class="row">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <h3 class="logo" style="text-align:center;">SDN Kebonsari 3 Malang</h3>
                                        </div>
                                        <div class="pull-right">
                                            <h4>Kode Inventaris<br>
                                                <strong>{{$data->kode_inventaris}}</strong>
                                            </h4>
                                        </div>                       
                                    </div>
                                    <hr>
                                    <div class="clearfix">
                                    <ul class="list-inline task-dates m-b-0 m-t-10 col-sm-offset-2">
                                        <li>
                                            <h5 class="font-600 m-b-5">Tanggal Diterima</h5>
                                            <p>{{ $data->tgl_terima->format('d-m-Y') }}</p>
                                        </li>
                                        <li>
                                            <h5 class="font-600 m-b-5">Asal Sarpras</h5>
                                            <p> {{ $data->asal_sarpras}} </p>
                                        </li>
                                    </ul>
                                    </div>
                                    <hr>
                                    <div class="clearfix">
                                        <ul class="list-inline task-dates m-b-0 m-t-0 col-sm-offset-2">
                                            <li>
                                                <h5 class="font-600 m-b-5">Kode Sarpras</h5>
                                                <p>{{ $data->sarprases->kode_sarpras }}</p>
                                            </li>
                                            <li>
                                                <h5 class="font-600 m-b-5">Nama Sarpras</h5>
                                                <p> {{ $data->sarprases->nama_sarpras }}</p>
                                            </li>
                                        </ul>
                                        <ul class="list-inline task-dates m-b-0 m-t-0 col-sm-offset-2">
                                            <li>
                                                <h5 class="font-600 m-b-5">Kegunaan</h5>
                                                <p>{{ $data->kegunaan}}</p>
                                            </li>
                                            <li>
                                                <h5 class="font-600 m-b-5">Jumlah</h5>
                                                <p> {{ $data->jumlah }} </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <!-- attach -->
                                <div class="portfolioContainer"> 
                                    <div class="attached-files m-t-30 col-sm-offset-2">
                                        <h5 class="font-600 m-b-5">Bukti Foto Penerimaan Sarpras </h5>
                                        <div class="files-list">
                                            <div class="file-box col-sm-offset-2">
                                                    <img width="330px" height="200px" src="{{ asset('fotoinventory/'.$data->foto_terima)}}">
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end attach -->
                            </div><!-- cardbox -->
                        </div><!-- end col -->
                    </div><!-- end row -->  
                </div> <!-- container -->
            </div> <!-- content -->

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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/detect.js"></script>
    <script src="/assets/js/fastclick.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/jquery.blockUI.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>

    <!-- Datatables-->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/assets/plugins/datatables/jszip.min.js"></script>
    <script src="/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/assets/plugins/datatables/dataTables.scroller.min.js"></script>
                <!-- Datatable init js -->
                <script src="/assets/pages/datatables.init.js"></script>
                <!-- Bootstrap tagsinput -->
                <script src="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

                <!-- Magnific popup -->
                <script type="text/javascript" src="/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js">
                </script>
                <!-- App js -->
                <script src="/assets/js/jquery.core.js"></script>
                <script src="/assets/js/jquery.app.js"></script>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#datatable').dataTable();
                        $('#datatable-keytable').DataTable({
                            keys: true
                        });
                        $('#datatable-responsive').DataTable();
                        $('#datatable-scroller').DataTable({
                            ajax: "/assets/plugins/datatables/json/scroller-demo.json",
                            deferRender: true,
                            scrollY: 380,
                            scrollCollapse: true,
                            scroller: true
                        });
                        var table = $('#datatable-fixed-header').DataTable({
                            fixedHeader: true
                        });
                    });
                    TableManageButtons.init();
                </script>
                <script type="text/javascript">
                    $(window).load(function(){
                        var $container = $('.portfolioContainer');
                        $container.isotope({
                            filter: '*',
                            animationOptions: {
                                duration: 750,
                                easing: 'linear',
                                queue: false
                            }
                        });
                    });
                    $(document).ready(function() {
                        $('.image-popup').magnificPopup({
                            type: 'image',
                            closeOnContentClick: true,
                            mainClass: 'mfp-fade',
                            gallery: {
                                enabled: true,
                                navigateByImgClick: true,
                                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                            }
                        });
                    });
                    </script>

</body>
</html>