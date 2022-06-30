<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon1.ico">

    <!-- App title -->
    @include('fix.title')

    <!-- Plugins css-->
    <link href="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- App CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

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
                            <h4 class="page-title">FORM EDIT USER</h4>
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
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-6 p-20 col-sm-offset-1">
                                    <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-md-8  m-t-15">Nama Pegawai</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        value="Nama pegawai">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-8 m-t-15">ID Pegawai</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control"
                                                        value="ID Pegawai">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 m-t-15">Nomor Telepon</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        value="Nomor telepon pegawai">
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- end col -->

                                    <div class="col-lg-5 p-20 ">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-md-8 m-t-15">Kategori Pegawai</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select2">
                                                        <option>Kategori Pegawai</option>
                                                        <optgroup label="Pilih Leader">
                                                            <option value="1">Teknisi</option>
                                                            <option value="2">Admin</option>
                                                            <option value="3">Programmer</option>
                                                            <option value="4">Manager</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 m-t-15">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        value="Masukkan password pegawai">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12 m-t-15">Status Pegawai</label>
                                                <div class="radio radio-primary col-sm-offset-1">
                                                    <input type="radio" name="radio" id="radio3" value="option1" checked>
                                                    <label for="radio3">
                                                        Aktif
                                                    </label>
                                                </div>
                                                <div class="radio radio-primary col-sm-offset-1">
                                                    <input type="radio" name="radio" id="radio3" value="option2">
                                                    <label for="radio3">
                                                        Non Aktif
                                                    </label>
                                                </div>
                                            </div>

                                        </form>
                                        <div class="form-group p-20 m-b-0 m-t-30">
                                            <div class="col-sm-offset-0">
                                            <a href="/db" type="submit"
                                                    class="btn btn-success waves-effect waves-light"><i
                                                        class="fa fa-floppy-o" aria-hidden="true"></i> Cancel Edit</a>
                                                <a href="/db" type="submit"
                                                    class="btn btn-info waves-effect waves-light"><i
                                                        class="fa fa-floppy-o" aria-hidden="true"></i> Simpan
                                                    Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                            </div><!-- end row -->
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- Plugins Js -->
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript">
    </script>
    <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
    jQuery(document).ready(function() {

        //advance multiselect start
        $('#my_multi_select3').multiSelect({
            selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            afterInit: function(ms) {
                var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#' + that.$container.attr('id') +
                    ' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#' + that.$container.attr('id') +
                    ' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                    .on('keydown', function(e) {
                        if (e.which === 40) {
                            that.$selectableUl.focus();
                            return false;
                        }
                    });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                    .on('keydown', function(e) {
                        if (e.which == 40) {
                            that.$selectionUl.focus();
                            return false;
                        }
                    });
            },
            afterSelect: function() {
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function() {
                this.qs1.cache();
                this.qs2.cache();
            }
        });

        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });

    });

    // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-inline').datepicker();
    jQuery('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    </script>

</body>

</html>