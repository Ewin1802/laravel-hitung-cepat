<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            {{-- <a href="index.html">BAWASLU KAB. BOLMUT</a> --}}

            <a href="">BAWASLU KAB. BOLMUT</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Qc</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('modules-calendar') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('modules-calendar') }}">Kalender</a>
                    </li>
                    <li class="{{ Request::is('modules-chartjs') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ url('modules-chartjs') }}">Grafik</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item {{ Request::is('user.index') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Data Pengguna</span></a>
            </li>

            <li class="nav-item {{ Request::is('paslon.index') ? 'active' : '' }}">
                <a href="{{ route('paslon.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Data Pasangan Calon</span></a>
            </li>


            <li class="menu-header">Rekapitulasi Kecamatan</li>

            <li class="nav-item {{ Request::is('rekap_pinogaluman.index') ? 'active' : '' }}">
                <a href="{{ route('rekap_pinogaluman.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Rekap Kec. Pinogaluman</span></a>
            </li>

            <li class="nav-item {{ Request::is('rekap_kaidipang.index') ? 'active' : '' }}">
                <a href="{{ route('rekap_kaidipang.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Rekap Kec. Kaidipang</span></a>
            </li>

            <li class="nav-item {{ Request::is('rekap_bolbar.index') ? 'active' : '' }}">
                <a href="{{ route('rekap_bolbar.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Rekap Kec. Bolbar</span></a>
            </li>

            <li class="nav-item {{ Request::is('rekap_boltim.index') ? 'active' : '' }}">
                <a href="{{ route('rekap_boltim.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Rekap Kec. Boltim</span></a>
            </li>

            <li class="nav-item {{ Request::is('rekap_bintauna.index') ? 'active' : '' }}">
                <a href="{{ route('rekap_bintauna.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Rekap Kec. Bintauna</span></a>
            </li>

            <li class="nav-item {{ Request::is('rekap_sangkub.index') ? 'active' : '' }}">
                <a href="{{ route('rekap_sangkub.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Rekap Kec. Sangkub</span></a>
            </li>

            <li class="menu-header">Rekapitulasi Desa Per Dapil</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Rekap Desa Per Dapil</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('desa_dapil_satu.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('desa_dapil_satu.index') }}">Desa - Dapil Satu</a>
                    </li>
                    <li class='{{ Request::is('desa_dapil_dua.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('desa_dapil_dua.index') }}">Desa - Dapil Dua</a>
                    </li>
                    <li class='{{ Request::is('desa_dapil_tiga.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('desa_dapil_tiga.index') }}">Desa - Dapil Tiga</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Dokumen C1</li>
            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dokumen C1</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('c1_pinogaluman.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('c1_pinogaluman.index') }}">Kec. Pinogaluman</a>
                    </li>
                    <li class='{{ Request::is('c1_kaidipang.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('c1_kaidipang.index') }}">Kec. Kaidipang</a>
                    </li>
                    <li class='{{ Request::is('c1_bolbar.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('c1_bolbar.index') }}">Kec. Bolbar</a>
                    </li>
                    <li class='{{ Request::is('c1_boltim.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('c1_boltim.index') }}">Kec. Boltim</a>
                    </li>
                    <li class='{{ Request::is('c1_bintauna.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('c1_bintauna.index') }}">Kec. Bintauna</a>
                    </li>
                    <li class='{{ Request::is('c1_sangkub.index') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('c1_sangkub.index') }}">Kec. Sangkub</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Rekapitulasi Keseluruhan</li>

            <li class="nav-item {{ Request::is('rekap_total.index') ? 'active' : '' }}">
                <a href="{{ route('rekap_total.index') }}"
                    class="nav-link "><i class="fas fa-fire"></i><span>Rekap Total Suara</span></a>
            </li>


            <div class="hide-sidebar-mini mt-4 mb-4 p-3">
                <a href="https://www.instagram.com/ewin.lntp/"
                    class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Tentang Saya
                </a>
            </div>

    </aside>
</div>
