<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">

        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('petugas.dashboard')}}" class="nav-link {{'petugas/dashboard' === request()->path() ? 'active' : ''}}">
                        <i class="icon-stats-bars2"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                @if ($petugas->level == 'admin')
                <li class="nav-item nav-item-submenu  {{'petugas/report/laporan_masyarakat' === request()->path()  ||'petugas/report/laporan_pengaduan' === request()->path()  || 'petugas/dashboard' === request()->path()  ||  'petugas/admin/data' === request()->path()  ? '' : 'nav-item-expanded nav-item-open'}} ">
                    <a href="#" class="nav-link {{'petugas/masyarakat/data' === request()->path() ? 'active ' : ''}}"><i class="icon-users4"></i> <span> Masyarakat</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                        <li class="nav-item"><a href="{{route('data.masyarakat')}}" class="nav-link {{'petugas/masyarakat/data' === request()->path() ? 'active' : ''}}">Data Masyarakat</a></li>
                    </ul>
                </li>
                @elseif( $petugas->level == 'petugas' )
                <li class="nav-item">
                    <a href="{{route('data.pengaduan')}}" class="nav-link {{ 'petugas/pengaduan' === request()->path() || 'petugas/pengaduan/show/{*}' === request()->path()  ? 'active' : ''}}">
                        <i class="icon-inbox"></i>
                        <span>
                            Pengaduan Verifikasi
                        </span>
                    </a>
                </li>
                @endif

                <!-- /main -->


              {{-- petugas --}}

              @if ($petugas->level == 'admin')
              <li class="nav-item nav-item-submenu  {{'petugas/report/laporan_masyarakat' === request()->path()  ||'petugas/report/laporan_pengaduan' === request()->path()  ||'petugas/dashboard' === request()->path() || 'petugas/masyarakat/data' === request()->path() ?  '' : 'nav-item-expanded nav-item-open'}} ">
                <a href="#" class="nav-link {{'petugas/admin/data' === request()->path() ? 'active ' : ''}}"><i class="icon-user-tie"></i> <span> Petugas</span></a>

                  <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                      <li class="nav-item"><a href="{{route('data.petugas')}}" class="nav-link {{'petugas/admin/data' === request()->path() ? 'active' : ''}}">Data Petugas</a></li>
                  </ul>
              </li>
              @endif



            <li class="nav-item nav-item-submenu  {{'petugas/pengaduan' === request()->path() || 'petugas/pengaduan/show/{*}' === request()->path() || 'petugas/pennav-item-expanded nav-item-opengaduan' === request()->path() ||'petugas/dashboard' === request()->path() || 'petugas/masyarakat/data' === request()->path() || 'petugas/admin/data' === request()->path()   ?  '' : 'nav-item-expanded nav-item-open'}} ">
                <a href="#" class="nav-link {{'petugas/report/laporan_masyarakat' === request()->path()  ||'petugas/report/laporan_pengaduan' === request()->path()  ? 'active ' : ''}}"><i class="icon-file-text3"></i> <span> Laporan</span></a>

                  <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                      <li class="nav-item"><a href="{{route('laporan.pengaduan')}}" class="nav-link {{'petugas/report/laporan_pengaduan' === request()->path() ? 'active' : ''}}">Laporan Pengaduan</a></li>
                      <li class="nav-item"><a href="{{route('laporan.masyarakat')}}" class="nav-link {{'petugas/report/laporan_masyarakat' === request()->path() ? 'active' : ''}}">Laporan Masyarakat</a></li>
                  </ul>
              </li>

              {{-- petuags --}}





















                <!-- Forms -->



            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
