<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    @include('fix.title')

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
                            <h4 class="page-title">DAFTAR DATA PEMINJAMAN</h4>
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
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <div class="m-b-30">
                                    <a href="{{url('/datapeminjaman/create')}}" type="button" class="btn btn-custom"><i
                                            class="fa fa-plus"> </i> Tambah
                                        Data</a>
                                    <a href="javascript:window.print()"
                                        class="btn btn-inverse btn-rounded w-md waves-effect btn-sm m-b-5 pull-right">
                                        <i class="fa fa-download"> </i> Download
                                        Data</a>
                                </div>
                                <table id="datatable-responsive"
                                    class="table table-striped table-bordered dt-responsive nowrap" cellspacing="3"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center; vertical-align: middle;">No</th>
                                            <th style="text-align:center; vertical-align: middle;">Tanggal</th>
                                            <th style="text-align:center; vertical-align: middle;">Kode Pinjam</th>
                                            <th style="text-align:center; vertical-align: middle;">Nama Peminjam</th>
                                            <th style="text-align:center; vertical-align: middle;">Nama Sarpras</th>
                                            <th style="text-align:center; vertical-align: middle;">Jumlah<br>Sarpras</th>
                                            <th style="text-align:center; vertical-align: middle;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach($data as $pinjam)
                                        <tr>
                                            <td scope="pinjam">{{ $no++ }}</td>
                                            <td>{{ $pinjam->tgl_pinjam->format('d-m-Y')}}</td>
                                            <td>{{ $pinjam->kode_pinjam}}</td>
                                            <td>{{ $pinjam->users->name}}</td>
                                            <td>{{ $pinjam->sarprases->nama_sarpras}}</td>
                                            <td style="text-align:right">{{ $pinjam->jml_sarpras}}</td>
                                            <td class="actions" style="text-align:center">
                                                {{-- <a href="/editpeminjaman"
                                                    class="btn btn-icon waves-effect waves-light btn-success btn-xs m-b-5">
                                                    <i class="fa fa-pencil-square-o"></i> Edit </a>
                                                    &nbsp; --}}
                                                <a href="{{url('/datapeminjaman/'.$pinjam->id )}}"
                                                    class="btn btn-icon waves-effect waves-light btn-info btn-xs m-b-5">
                                                    <i class="fa fa-info-circle"></i> Detail </a>
                                                    &nbsp;
                                                {{-- <a href=""
                                                    class="btn btn-icon waves-effect waves-light btn-danger btn-xs m-b-5">
                                                    <i class="fa fa-trash"></i> Hapus</a> --}}
                                                <form action="{{('/datapeminjaman/'.$pinjam->id)}}" method="post">
                                                    @method('delete')    
                                                    @csrf
                                                    <button class="btn btn-icon waves-effect waves-light btn-danger btn-xs m-b-5" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data?')">
                                                        <i class="fa fa-trash"></i> Hapus</a></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->


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
    </script>

</body>

</html>