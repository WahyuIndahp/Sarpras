<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="/assets/images/users/akun.png" alt="user-img" title="profile"
                    class="img-circle img-thumbnail img-responsive">
            </div>
            @auth
            <h5><a href="#">{{auth()->user()->name}}</a> </h5>
            @endauth
            <ul class="list-inline">
                <li>
                    <a href="/db">
                        <i class="zmdi zmdi-home"></i>
                    </a>
                </li>

                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="text-custom">
                            <i class="zmdi zmdi-power"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="/dataruangsekolah" class="waves-effect"><i class="fa fa-institution" aria-hidden="true"></i> <span> Ruang Sekolah </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span> Perencanaan
                        </span> <span class="menu-arrow"></span></a>
                    <ul >
                        <a href="/dataperencanaan" class="waves-effect"><span> Data Perencanaan </span> </a>
                        <a href="/dataperekapan" class="waves-effect"><span> Perekapan </span> </a>
                    </ul>
                <li >

                <li>
                    <a href="/datapengadaan" class="waves-effect"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span> Pengadaan </span> </a>
                </li>

                <li >
                    <a href="/datapendistribusian" class="waves-effect"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span> Pendistribusian </span> </a>
                </li>

                <li class="has_sub">
                    <a href="/datainventaris" class="waves-effect"><i class="fa fa-archive"></i><span> Inventaris </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-book"></i><span> Peminjaman
                        </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <a href="/datapeminjaman" class="waves-effect"><span> Data Peminjaman </span> </a>
                        <a href="/datapengembalian" class="waves-effect"><span> Data Pengembalian </span> </a>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inbox"></i><span> Perawatan
                        </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <a href="/datakondisi" class="waves-effect"><span> Data Kondisi </span> </a>
                        <a href="/datapembenahan" class="waves-effect"><span> Data Pembenahan </span> </a>
                        <a href="/datapenghapusan" class="waves-effect"><span> Data Penghapusan </span> </a>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>