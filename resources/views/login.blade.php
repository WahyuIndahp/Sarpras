<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="/assets/images/faviconn.ico">

    <!-- App title -->
    <title>SISTEM INFORMASI MANAJEMEN SARANA PRASARANA</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

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

<body class="antialiased">
    <div class="account-pages"></div>
    <div class="clearfix"></div>

    <div class="wrapper-page">

        <div class="m-t-40 card-box" position="right">
            <div class="text-center m-t-20">
                <a class="logo"><span>SDN <span>Kebonsari 3</span></span></a>
                <h5 class="text-muted m-t-0 font-600">SISTEM INFORMASI<br> MANAJEMEN SARANA PRASARANA</h5>
            </div>
            <div class="alert alert-info m-t-20" id="alert-login" style="text-align:center;margin-bottom: 0;">
                Masukkan Username dan Password <br> (Menggunakan username & password)</div>
            <div class="panel-body">

            @if(session()->has('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
                {{ session('loginError') }}
            </div>
            @endif
                <form class="form-horizontal" action="/login" method="post">
                    @csrf
                    <div class="form-group m-t-20">
                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                        <input class="form-control form-control-solplaceholder-no-fix" type="text" autocomplete="off"
                            placeholder="Username" name="username" id="username" required value="{{ old ('username') }}" />
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group m-t-20">
                        <input class="form-control form-control-solplaceholder-no-fix" type="password"
                            autocomplete="off" placeholder="Password" name="password" id="password" required/>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <input type="checkbox" id="chk_tampilkan" onchange="tampilkan_password()">
                                <label for="chk_tampilkan">Tampilkan Password</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-xs-4 col-sm-offset-4">
                            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light"
                                type="submit">Login <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <div class="form-group m-t-20 m-b-0">
                        <div class="col-sm-12">
                            <a href="/lupapw" class="text-muted"><i class="fa fa-lock m-r-5"></i> Lupa Password?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 m-t-10 m-b-0 text-center">
                            <p class="text-muted">Belum punya akun? <a href="/register" class="text-primary m-l-5"><b>Register</b></a></p>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- end card-box-->

    </div>
    <!-- end wrapper page -->



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
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/jquery.core.js"></script>
    <script src="/assets/js/jquery.app.js"></script>

    <script type="text/javascript">
    function tampilkan_password() {
        if ($("#chk_tampilkan").prop("checked") == true) {
            $("#password").attr("type", "text");
        } else {
            $("#password").attr("type", "password");
        }
    }
    </script>

    <!-- END JAVASCRIPTS -->
</body>

</html>