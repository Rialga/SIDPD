
@section('side-bar')
<div class="side-nav-inner">
    <ul class="side-nav-menu scrollable">

        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="anticon anticon-dashboard"></i>
                </span>
                <span class="title">Statistik</span>
                <span class="arrow">
                    <i class="arrow-icon"></i>
                </span>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="{{ url('/statistik/km') }}">
                            <i class="fas fa-caret-right"></i>
                            <span>Kondisi Umum Daerah</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ url('/statistik/km') }}">
                            <i class="fas fa-caret-right"></i>
                            <span>Keagamaan / ABS-SBK</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ url('/statistik/km') }}">
                            <i class="fas fa-caret-right"></i>
                            <span>Kesjahteraan Masyarakat</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ url('/statistik/km') }}">
                            <i class="fas fa-caret-right"></i>
                            <span>Daya saing Daerah</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ url('/statistik/km') }}">
                            <i class="fas fa-caret-right"></i>
                            <span>Pelayanan umum</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ url('/statistik/km') }}">
                            <i class="fas fa-caret-right"></i>
                            <span>Potensi Sumber Daya</span>
                        </a>
                    </li>
                </ul>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                    <i class="anticon anticon-file-text"></i>
                </span>
                <span class="title">Input Data</span>
                <span class="arrow">
                    <i class="arrow-icon"></i>
                </span>
                <ul class="dropdown-menu">

                    {{-- Kondisi Umum Daerah --}}
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Kondisi Umum Daerah</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <i class="fas fa-caret-right"></i>
                                    Karakteristik Lokasi dan Wilayah
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('kud/0') }}"><i class="anticon anticon-double-right"></i> Topografi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/1') }}"><i class="anticon anticon-double-right"></i> Geologi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/2') }}"><i class="anticon anticon-double-right"></i> Hidrologi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/3') }}"><i class="anticon anticon-double-right"></i> Klimatologi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/4') }}"><i class="anticon anticon-double-right"></i> Luas dan batas Wilayah</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/5') }}"><i class="anticon anticon-double-right"></i> Letak dan Kondisi Geografis</a>
                                    </li>
                                    <li>

                                        <li class="nav-item dropdown">
                                            <a href="javascript:void(0);">
                                                <i class="fas fa-caret-right"></i>
                                                Penggunaan Lahan
                                                <span class="arrow">
                                                    <i class="arrow-icon"></i>
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ url('kud/6') }}"><i class="anticon anticon-double-right"></i> Kawasan Budidaya</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('kud/7') }}"><i class="anticon anticon-double-right"></i> Kawasan Lindung</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <i class="fas fa-caret-right"></i>
                                    Wilayah Rawan Bencana
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('kud/8') }}"><i class="anticon anticon-double-right"></i>Tsunami</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/9') }}"><i class="anticon anticon-double-right"></i>Banjir</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/10') }}"><i class="anticon anticon-double-right"></i>Abrasi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/11') }}"><i class="anticon anticon-double-right"></i>Longsor</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/12') }}"><i class="anticon anticon-double-right"></i>Kebakaran Hutan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/13') }}"><i class="anticon anticon-double-right"></i>Gempa</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <i class="fas fa-caret-right"></i>
                                    Demografi
                                    <span class="arrow">
                                        <i class="arrow-icon"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('kud/14') }}"><i class="anticon anticon-double-right"></i>Demografi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('kud/15') }}"><i class="anticon anticon-double-right"></i>Struktur</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- Keagamaan / ABS-SBK --}}
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Keagamaan/ <br>ABS-SBK</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('keagamaan/4') }}">Nagari Madani</a>
                            </li>
                            <li>
                                <a href="{{ url('keagamaan/5') }}">Lembaga Pendidikan</a>
                            </li>
                            <li>
                                <a href="{{ url('keagamaan/6') }}">SDM Keagamaan</a>
                            </li>
                            <li>
                                <a href="{{ url('keagamaan/7') }}">Lembaga Adat</a>
                            </li>
                            <li>
                                <a href="{{ url('keagamaan/8') }}">Sarana Ibadah</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Kesejahteraan Masyarakat --}}
                    <li>
                        <a href="{{ url('km/') }}">
                            Kesejahteraan Masyarakat
                        </a>
                    </li>

                    {{-- Daya saing Daerah --}}
                    <li>
                        <a href="{{ url('dsd/') }}">
                            Daya Saing Daerah
                        </a>
                    </li>

                    {{-- Pelayanan umum --}}
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Pelayanan Umum</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a href="{{ url('pu/0') }}">
                                    <i class="fas fa-caret-right"></i>
                                    Layanan Urusan Wajib Dasar
                                </a>
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
                                        <a href="{{ url('pu/1') }}"><i class="anticon anticon-double-right"></i>Tenaga Kerja</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/2') }}"><i class="anticon anticon-double-right"></i>Pemberdayaan Perempuan dan Perlindungan Anak  </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/3') }}"><i class="anticon anticon-double-right"></i>Pangan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/4') }}"><i class="anticon anticon-double-right"></i>Pertanahan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/5') }}"><i class="anticon anticon-double-right"></i>Lingkungan Hidup</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/6') }}"><i class="anticon anticon-double-right"></i>Administrasi Kependudukan dan Pencatatan Sipil</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/7') }}"><i class="anticon anticon-double-right"></i>Pemberdayaan Masyarakat dan Desa</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/8') }}"><i class="anticon anticon-double-right"></i>Pengendalian Penduduk dan Keluarga berencana</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/9') }}"><i class="anticon anticon-double-right"></i>Perhubungan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/10') }}"><i class="anticon anticon-double-right"></i>Komunikasi dan Informatika</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/11') }}"><i class="anticon anticon-double-right"></i>Koperasi, Usaha Kecil dan Menengah</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/12') }}"><i class="anticon anticon-double-right"></i>Penanaman Modal</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/13') }}"><i class="anticon anticon-double-right"></i>Kepemudaan dan Olah Raga</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/14') }}"><i class="anticon anticon-double-right"></i>Statistik</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/15') }}"><i class="anticon anticon-double-right"></i>Persandian</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/16') }}"><i class="anticon anticon-double-right"></i>Kebudayaan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/17') }}"><i class="anticon anticon-double-right"></i>Perpustakaan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/18') }}"><i class="anticon anticon-double-right"></i>Kearsipan</a>
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
                                        <a href="{{ url('pu/19') }}"><i class="anticon anticon-double-right"></i>Pariwisata</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/20') }}"><i class="anticon anticon-double-right"></i>Pertanian</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/21') }}"><i class="anticon anticon-double-right"></i>Kehutanan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/22') }}"><i class="anticon anticon-double-right"></i>Energi dan sumber Daya Mineral</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/23') }}"><i class="anticon anticon-double-right"></i>Perdagangan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/24') }}"><i class="anticon anticon-double-right"></i>Perindustrian</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/25') }}"><i class="anticon anticon-double-right"></i>Transimgrasi</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/26') }}"><i class="anticon anticon-double-right"></i>Kelautan dan Perikanan</a>
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
                                        <a href="{{ url('pu/27') }}"><i class="anticon anticon-double-right"></i>Perancangan Pembangunan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/28') }}"><i class="anticon anticon-double-right"></i>Keuangan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/29') }}"><i class="anticon anticon-double-right"></i>Kepegawaian serta Pendidikan dan Pelatihan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/30') }}"><i class="anticon anticon-double-right"></i>Penelitian dan Pengembangan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/31') }}"><i class="anticon anticon-double-right"></i>Pengawasan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('pu/32') }}"><i class="anticon anticon-double-right"></i>Sekretariat Dewan</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    {{-- Potensi Sumber Daya --}}
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Potensi Sumber<br> Daya</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('psd/kp') }}">Kawasan Pembangunan</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </a>
            </li>

    </ul>
</div>
@endsection
