<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon1.ico">

    <!-- App title -->
    @include('fix.title')

    <!-- Plugins css-->
    <link href="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="/assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="//assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="page-title">EDIT QRCODE</h4>
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
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="card-box">
                            <div class="row">
                        				<div class="col-lg-10 col-sm-offset-1">
                        					<form class="form-horizontal" role="form" method="POST" action="/dataqrcode/{{ $data->id }}" enctype="multipart/form-data">
	                                            @csrf
                                                @method('PUT')
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label" style="text-align:left">Kode Inventaris</label>
	                                                <div class="col-sm-10">
                                                        <select class="form-control sarpras2" name="inventaris_id" id="inventaris_id" required>
                                                            <option>Silahkan pilih kode inventaris</option>
                                                            <optgroup label="Daftar Sarpras">
                                                            @foreach ($inventories as $item)
                                                            <option value="{{$item->id}}" {{old('inventaris_id',$data->inventaris_id) == $item->id ? 'selected' : null}}>{{$item->kode_inventaris}}</option>
                                                            @endforeach
                                                            </optgroup>
                                                        </select>
                                                    </div>
	                                            </div>

	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label" style="text-align:left">Link detail inventaris</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="link_detail" id="link_detail" value="{{$data->link_detail}}">
	                                                </div>
	                                            </div>

                                                <div class="form-group m-t-10">
                                                    <div class="col-sm-offset-8">
                                                    &nbsp;&nbsp;
                                                    <a href="/datainventaris" type="submit"
                                                        class="btn btn-inverse btn-trans waves-effect waves-light"><i
                                                            class="fa fa-times" aria-hidden="true"></i> Batal</a>
                                                    <!-- <a href="/datainventaris" type="submit"
                                                        class="btn btn-primary waves-effect waves-light"><i
                                                            class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</a> -->
                                                    <button type="submit"
                                                        class="btn btn-success waves-effect waves-light"><i
                                                            class="fa fa-floppy-o" aria-hidden="true"></i> Simpan
                                                        Data</button>
                                                    </div>
                                                </div>
	                                        </form>
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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/detect.js"></script>
    <script src="/assets/js/fastclick.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/jquery.blockUI.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>

    <!-- Plugins Js -->
    <script src="/assets/plugins/switchery/switchery.min.js"></script>
    <script src="/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="/assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript">
    </script>
    <script src="/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/moment/moment.js"></script>
    <script src="/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="/assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <!-- file uploads js -->
    <script src="/assets/plugins/fileuploads/js/dropify.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/jquery.core.js"></script>
    <script src="/assets/js/jquery.app.js"></script>

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
        format: "dd-mm-yyyy",
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-inline').datepicker();
    jQuery('#datepicker-multiple-date').datepicker({
        format: "mm-dd-yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });

    $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
    </script>

</body>

</html>