<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" style="width: 120px;" class="rounded-circle image-fluid" src="https://lppm.unram.ac.id/wp-content/uploads/2018/07/LOGO-UNRAM-1.png" />
                            <span class="clear">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="block m-t-xs font-bold">Sistem Presensi</span>
                                </a>
                            </span>
                        </div>
                        <div class="logo-element">
                            UNRAM
                        </div>
                    </li>
                    <li class= {{$loc == '/' ? "active" : "1"}}>
                        <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li  class={{$loc == 'rekap' ? "active" : "2"}}>
                        <a href="/rekap"><i class="fa fa-sticky-note"></i> <span class="nav-label">Rekap</span></a>
                    </li>
                    <li  class={{$loc == 'input' ? "active" : "3"}}>
                        <a href="/input"><i class="fa fa-group"></i> <span class="nav-label">Input Pegawai</span></a>
                    </li>

                </ul>

            </div>
        </nav>