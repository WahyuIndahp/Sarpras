<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box" >
            <div class="user-img">
                <img src="/assets/images/users/user.png" alt="user-img" title="profile" class="img-circle img-thumbnail img-responsive">
            </div>
                    @auth
                    <h5><a href="#" style="font-weight:bold; color:rgb(0, 0, 0);" >{{auth()->user()->name}}</a> </h5>
                    @endauth
                    <ul class="list-inline">
                        {{-- <li>
                        <button href="#" class="text-custom">
                            <i class="zmdi zmdi-settings"></i>
                        </button>
                        </li> --}}
                        <li>
                            <button href="/db" class="text-custom">
                                <i class="zmdi zmdi-home"></i>
                            </button>
                        </li>
        
                        <li>
                            <form  action="/logout" method="post">
                                @csrf
                                <button type="submit" class="text-custom">
                                    <i class="zmdi zmdi-power"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                @if(Auth::user()->level == "admin")
                <li>
                    <a href="/dataruangsekolah" class="waves-effect"><i class="fa fa-institution" aria-hidden="true"></i> <span> Ruang Sekolah </span> </a>
                </li>
                <li>
                    <a href="/datasarpras" class="waves-effect"><i class="fa fa-dropbox" aria-hidden="true"></i> <span> Sarpras Sekolah </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span> Daftar Kebutuhan
                        </span> <span class="menu-arrow"></span></a>
                    <ul >
                        <a href="/dataperencanaan" class="waves-effect"><span> Data Perencanaan </span> </a>
                        <a href="/dataperekapan" class="waves-effect"><span> Perekapan </span> </a>
                    </ul>
                <li >
                <li>
                    <a href="/datapengadaan" class="waves-effect"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span> Pengadaan/Barang Datang</span> </a>
                </li> 
                <li >
                    <a href="/datapendistribusian" class="waves-effect"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span> Serah Terima Barang </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-archive" aria-hidden="true"></i><span> Inventaris
                        </span> <span class="menu-arrow"></span></a>
                    <ul >
                        <a href="/datainventaris" class="waves-effect"><span> Inventaris </span> </a>
                        <a href="/dataqrcode" class="waves-effect"><span> Cetak QrCode</span> </a>
                    </ul>
                <li >
                {{-- <li class="has_sub">
                    <a href="/datainventaris" class="waves-effect"><i class="fa fa-archive"></i><span> Inventaris </span> </a>
                </li> --}}
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-book"></i><span> Peminjaman
                        </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                        <a href="/datapermintaan" class="waves-effect"><span> Data Permintaan </span> </a>
                        <a href="/datapeminjaman" class="waves-effect"><span> Data Peminjaman </span> </a>
                        <a href="/datareturn" class="waves-effect"><span> Data Pengembalian </span> </a>
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
                @endif

                @if(Auth::user()->level == "pjruang")
                
                    <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span> Daftar Kebutuhan
                        </span> <span class="menu-arrow"></span></a>
                    <ul >
                        <a href="/dataperencanaan" class="waves-effect"><span> Data Perencanaan </span> </a>
                        <a href="/lihatperekapan" class="waves-effect"><span> Perekapan Sarpras</span> </a>
                    </ul>
                    <li >
                    <li>
                        <a href="/lihatpengadaan" class="waves-effect"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span> Pengadaan Sarpras </span> </a>
                    </li>
                    <li >
                        <a href="/datapendistribusian" class="waves-effect"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span> Serah Terima Barang </span> </a>
                    </li>
                    <li>
                        <a href="/datapermintaan" class="waves-effect"><i class="fa fa-inbox"></i><span> Data Permintaan </span> </a>
                    </li>
                @endif

                @if(Auth::user()->level == "staff")
                    <li >
                        <a href="/lihatperekapan" class="waves-effect"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span> Perekapan Sarpras</span> </a>
                    <li >
                    <li>
                        <a href="/lihatpengadaan" class="waves-effect"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span> Pengadaan Sarpras </span> </a>
                    </li>
                    <li class="has_sub">
                        <a href="/lihatinventaris" class="waves-effect"><i class="fa fa-archive"></i><span> Inventaris Sarpras</span> </a>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-book"></i><span> Peminjaman
                            </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                            <a href="/datapeminjaman" class="waves-effect"><span> Data Peminjaman </span> </a>
                            <a href="/datareturn" class="waves-effect"><span> Data Pengembalian </span> </a>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inbox"></i><span> Perawatan
                            </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <a href="/lihatkondisi" class="waves-effect"><span>Kondisi Sarpras</span> </a>
                            <a href="/lihatpembenahan" class="waves-effect"><span>Pembenahan Sarpras</span> </a>
                            <a href="/lihatpenghapusan" class="waves-effect"><span>Penghapusan Sarpras</span> </a>
                        </ul>
                    </li>
                @endif

                <!--<li>
                    <a href="/dataruangsekolah" class="waves-effect"><i class="fa fa-institution" aria-hidden="true"></i> <span> Ruang Sekolah </span> </a>
                </li>
                <li>
                    <a href="/datasarpras" class="waves-effect"><i class="fa fa-dropbox" aria-hidden="true"></i> <span> Sarpras Sekolah </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span> Perencanaan
                        </span> <span class="menu-arrow"></span></a>
                    <ul >
                        <a href="/dataperencanaan" class="waves-effect"><span> Data Perencanaan </span> </a>
                        <a href="/dataperekapan" class="waves-effect"><span> Perekapan </span> </a>
                        
                        <a href="/lihatperekapan" class="waves-effect"><span> Perekapan Sarpras </span> </a>
                    </ul>
                <li >

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span> Pengadaan
                        </span> <span class="menu-arrow"></span></a>
                    <ul >
                        <a href="/datapengadaan" class="waves-effect"><span> Pengadaan </span> </a>
                        <a href="/lihatpengadaan" class="waves-effect"><span> Pengadaan Sarpras</span> </a>
                    </ul>
                <li >

                {{-- <li>
                    <a href="/datapengadaan" class="waves-effect"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span> Pengadaan </span> </a>
                </li> --}}

                <li >
                    <a href="/datapendistribusian" class="waves-effect"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span> Pendistribusian </span> </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-archive" aria-hidden="true"></i><span> Inventaris
                        </span> <span class="menu-arrow"></span></a>
                    <ul >
                        <a href="/datainventaris" class="waves-effect"><span> Inventaris </span> </a>
                        <a href="/lihatinventory" class="waves-effect"><span>Inventaris Sarpras</span> </a>
                    </ul>
                <li >

                {{-- <li class="has_sub">
                    <a href="/datainventaris" class="waves-effect"><i class="fa fa-archive"></i><span> Inventaris </span> </a>
                </li> --}}

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-book"></i><span> Peminjaman
                        </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                        <a href="/datapermintaan" class="waves-effect"><span> Data Permintaan </span> </a>
                        <a href="/datapeminjaman" class="waves-effect"><span> Data Peminjaman </span> </a>
                        <a href="/datareturn" class="waves-effect"><span> Data Pengembalian </span> </a>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inbox"></i><span> Perawatan
                        </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <a href="/datakondisi" class="waves-effect"><span> Data Kondisi </span> </a>
                        <a href="/lihatkondisi" class="waves-effect"><span>Kondisi Sarpras</span> </a>
                        <a href="/datapembenahan" class="waves-effect"><span> Data Pembenahan </span> </a>
                        <a href="/lihatpembenahan" class="waves-effect"><span>Pembenahan Sarpras</span> </a>
                        <a href="/datapenghapusan" class="waves-effect"><span> Data Penghapusan </span> </a>
                        <a href="/lihatpenghapusan" class="waves-effect"><span>Penghapusan Sarpras</span> </a>
                    </ul>
                </li>-->
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>