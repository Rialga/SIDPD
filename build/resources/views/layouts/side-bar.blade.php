
@section('side-bar')
<div class="side-nav-inner">
    <ul class="side-nav-menu scrollable">

        <li class="nav-item dropdown open">
            <a class="dropdown-toggle" href="{{ url('dashboard/') }}">
                <span class="icon-holder">
                    <i class="anticon anticon-dashboard"></i>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>

        <hr>

        {{-- Kondisi Umum Daerah --}}
        <li class="nav-item dropdown">
            <a href="javascript:void(0);">
                <i class="anticon anticon-file-text"></i>
                <span>Kondisi Umum Daerah</span>
                <span class="arrow">
                    <i class="arrow-icon"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="">Rawan Bencana</a>
                </li>
                <li>
                    <a href="">Karakteristik Wilayah</a>
                </li>
            </ul>
        </li>
        {{-- Keagamaan / ABS-SBK --}}
        <li class="nav-item dropdown">
            <a href="javascript:void(0);">
                <i class="anticon anticon-file-text"></i>
                <span>Keagamaan/ABS-SBK</span>
                <span class="arrow">
                    <i class="arrow-icon"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="app-e-commerce-order-list.html">Orders List</a>
                </li>
                <li>
                    <a href="app-e-commerce-products.html">Products</a>
                </li>
                <li>
                    <a href="app-e-commerce-products-list.html">Products List</a>
                </li>
                <li>
                    <a href="app-e-commerce-products-edit.html">Products Edit</a>
                </li>
            </ul>
        </li>
        {{-- Kesejahteraan Masyarakat --}}
        <li>
            <a href="{{ url('km/') }}">
                <i class="anticon anticon-file-text"></i>
                Kesejahteraan Masyarakat
            </a>
        </li>

        {{-- Daya saing Daerah --}}
        <li>
            <a href="app-file-manager.html">
                <i class="anticon anticon-file-text"></i>
                Daya Saing Daerah
            </a>
        </li>

        {{-- Pelayanan umum --}}
        <li class="nav-item dropdown">
            <a href="javascript:void(0);">
                <i class="anticon anticon-file-text"></i>
                <span>Pelayanan Umum</span>
                <span class="arrow">
                    <i class="arrow-icon"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item dropdown">
                    <a href="javascript:void(0);">
                        <i class="fas fa-caret-right"></i>
                        Layanan Urusan Wajib Dasar
                        <span class="arrow">
                            <i class="arrow-icon"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>

                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pendidikan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Kesehatan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pekerjaan Umum dan Penataan Ruang</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Perumahan Rakyat dan Kawasan Pemukiman</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Ketentraman Ketertiban Umum, dan Pelindungan Masyarakat</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Sosial</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-caret-right"></i>
                        Layanan Urusan Wajib Non Dasar
                        <span class="arrow">
                            <i class="arrow-icon"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>

                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pendidikan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Kesehatan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pekerjaan Umum dan Penataan Ruang</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Perumahan Rakyat dan Kawasan Pemukiman</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Ketentraman Ketertiban Umum, dan Pelindungan Masyarakat</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Sosial</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-caret-right"></i>
                        Layanan Urusan Pilihan
                        <span class="arrow">
                            <i class="arrow-icon"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>

                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pendidikan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Kesehatan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pekerjaan Umum dan Penataan Ruang</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Perumahan Rakyat dan Kawasan Pemukiman</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Ketentraman Ketertiban Umum, dan Pelindungan Masyarakat</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Sosial</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-caret-right"></i>
                        Penunjang Urusan
                        <span class="arrow">
                            <i class="arrow-icon"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>

                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pendidikan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Kesehatan</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Pekerjaan Umum dan Penataan Ruang</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Perumahan Rakyat dan Kawasan Pemukiman</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Ketentraman Ketertiban Umum, dan Pelindungan Masyarakat</a>
                        </li>
                        <li>
                            <a href="app-e-commerce-products.html"><i class="anticon anticon-double-right"></i> Sosial</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        {{-- Potensi Sumber Daya --}}
        <li class="nav-item dropdown">
            <a href="javascript:void(0);">
                <i class="anticon anticon-file-text"></i>
                <span>Potensi Sumber Daya</span>
                <span class="arrow">
                    <i class="arrow-icon"></i>
                </span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="app-e-commerce-order-list.html">Orders List</a>
                </li>
                <li>
                    <a href="app-e-commerce-products.html">Products</a>
                </li>
                <li>
                    <a href="app-e-commerce-products-list.html">Products List</a>
                </li>
                <li>
                    <a href="app-e-commerce-products-edit.html">Products Edit</a>
                </li>
            </ul>
        </li>

        <hr>
    </ul>
</div>
@endsection
