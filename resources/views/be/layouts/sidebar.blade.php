<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <span class="align-middle h1 text-white"><b>LEGIJAYA</b></span>
        </a>
        <ul class="sidebar-nav">

            <li class="sidebar-header {{ Request::is('admin*') ? 'active bg-primary rounded bg-opacity-50 fs-5' : '' }}">
                Menu Master
            </li>

            <li class="sidebar-item {{ Request::is('admin/master/guest*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('admin/master/guest') }}"><i class="align-middle"
                        data-feather="users"></i> <span class="align-middle">Guest</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('master/pelanggan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/pelanggan') }}"><i class="align-middle"
                        data-feather="users"></i> <span class="align-middle">Pelanggan</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('master/pegawai*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/pegawai') }}"><i class="align-middle"
                        data-feather="users"></i> <span class="align-middle">Pegawai</span></a>
            </li>
            <li class="sidebar-item {{ Request::is('master/kategoribarang*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/kategoribarang') }}"><i class="align-middle"
                        data-feather="archive"></i> <span class="align-middle">Kategori Barang</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('master/barang*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/barang') }}"><i class="align-middle"
                        data-feather="archive"></i> <span class="align-middle">Barang</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('master/paketbarang*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/paketbarang') }}"><i class="align-middle"
                        data-feather="archive"></i> <span class="align-middle">Paket Barang</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('master/cetak_barcode*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('master/cetak_barcode') }}"><i class="align-middle"
                        data-feather="archive"></i> <span class="align-middle">Cetak Barcode</span></a>
            </li>

            <li
                class="sidebar-header {{ Request::is('pembelian*') ? 'active bg-primary rounded bg-opacity-50 fs-5' : '' }}">
                Menu Pembelian
            </li>

            <li class="sidebar-item {{ Request::is('pembelian/pembelian*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('pembelian/pembelian') }}"><i class="align-middle"
                        data-feather="calendar"></i> <span class="align-middle">Pembelian [F7]</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('pembelian/returpembelian*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('pembelian/returpembelian') }}"><i class="align-middle"
                        data-feather="trending-down"></i> <span class="align-middle">Retur Pembelian</span></a>
            </li>


            <li
                class="sidebar-header {{ Request::is('penjualan*') ? 'active bg-primary rounded bg-opacity-50 fs-5' : '' }}">
                Menu Penjualan
            </li>

            <li class="sidebar-item {{ Request::is('penjualan/penjualan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('penjualan/penjualan') }}"><i class="align-middle"
                        data-feather="calendar"></i> <span class="align-middle">Penjualan [F8]</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('penjualan_online/penjualan_online*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('penjualan_online/penjualan_online') }}"><i class="align-middle"
                        data-feather="calendar"></i> <span class="align-middle">Penjualan Online [F9]</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('penjualan/returpenjualan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('penjualan/returpenjualan') }}"><i class="align-middle"
                        data-feather="trending-down"></i> <span class="align-middle">Retur Penjualan</span></a>
            </li>

            <li
                class="sidebar-header {{ Request::is('setting*') ? 'active bg-primary rounded bg-opacity-50 fs-5' : '' }}">
                Menu Setting
            </li>

            {{-- <li class="sidebar-item">
					<a class="sidebar-link" href="ui-buttons.html"><i class="align-middle" data-feather="shield"></i> <span class="align-middle">Hak Akses</span></a>
				</li> --}}

            {{-- <li class="sidebar-item">
					<a class="sidebar-link" href="pages-blank.html"><i class="align-middle" data-feather="archive"></i> <span class="align-middle">Edit Stok Barang</span></a>
				</li> --}}

            <li class="sidebar-item {{ Request::is('setting/kas_masuk*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('setting/kas_masuk') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                        <path fill-rule="evenodd"
                            d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>
                    <span class="align-middle">Kas Masuk</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('setting/kas_keluar*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('setting/kas_keluar') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                    <span class="align-middle">Kas Keluar</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('setting/stok_opname*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('setting/stok_opname') }}"><i class="align-middle"
                        data-feather="archive"></i> <span class="align-middle">Stok Opname</span></a>
            </li>

            <li
                class="sidebar-header {{ Request::is('laporan*') ? 'active bg-primary rounded bg-opacity-50 fs-5' : '' }}">
                Menu Laporan
            </li>

            <li class="sidebar-item {{ Request::is('laporan/rekap_harian*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('laporan/rekap_harian') }}"><i class="align-middle"
                        data-feather="bar-chart-2"></i> <span class="align-middle">Laporan Rekap Harian</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('laporan/stok_kritis*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('laporan/stok_kritis') }}"><i class="align-middle"
                        data-feather="archive"></i> <span class="align-middle">Laporan Stok Kritis</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('laporan/stok_harian*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('laporan/stok_harian') }}"><i class="align-middle"
                        data-feather="archive"></i> <span class="align-middle">Laporan Stok Harian</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('laporan/laba_rugi*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('laporan/laba_rugi') }}"><i class="align-middle"
                        data-feather="bar-chart-2"></i> <span class="align-middle">Laporan Laba Rugi</span></a>
            </li>
            <li class="sidebar-item {{ Request::is('laporan/hpp*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('laporan/hpp') }}"><i class="align-middle"
                        data-feather="bar-chart-2"></i> <span class="align-middle">Laporan HPP</span></a>
            </li>

            <li class="sidebar-item {{ Request::is('laporan/pelanggan*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('laporan/pelanggan') }}"><i class="align-middle"
                        data-feather="bar-chart-2"></i> <span class="align-middle">Laporan Pelanggan</span></a>
            </li>

            <li
                class="sidebar-header {{ Request::is('backup*') ? 'active bg-primary rounded bg-opacity-50 fs-5' : '' }}">
                Menu Backup
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" target="_blank"
                    href="http://localhost/phpmyadmin/index.php?route=/database/import&db=sales_app"><i
                        class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Import
                        Data</span></a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" target="_blank"
                    href="http://localhost/phpmyadmin/index.php?route=/database/export&db=sales_app"><i
                        class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Export
                        Data</span></a>
            </li>
        </ul>


        <div class="py-5">
        </div>
    </div>
</nav>
