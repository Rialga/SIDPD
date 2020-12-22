@extends('layouts.main')
@section('content')



<div class="row">
    <div class="col-md-12 col-lg-12 mb-3">
        <div class="media align-items-center">
            <div class="m-l-30">
                <h3 class="m-b-0">Statistik</h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-line-chart"></i>
                    </div>
                    <div class="m-l-30">
                        <a href="{{ url('/statistik/km') }}">
                            <h3 class="m-b-0">Kondisi Umum Daerah</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-line-chart"></i>
                    </div>
                    <div class="m-l-30">
                        <a href="{{ url('/statistik/km') }}">
                            <h3 class="m-b-0">Keagamaan ABS/SBK</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-line-chart"></i>
                    </div>
                    <div class="m-l-30">
                        <a href="{{ url('/statistik/km') }}">
                            <h3 class="m-b-0">Kesejahteraan Masyarakat</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-line-chart"></i>
                    </div>
                    <div class="m-l-30">
                        <a href="{{ url('/statistik/km') }}">
                            <h3 class="m-b-0">Daya Saing Daerah</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-line-chart"></i>
                    </div>
                    <div class="m-l-30">
                        <a href="{{ url('/statistik/km') }}">
                            <h3 class="m-b-0">Pelayanan <br>Umum</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-line-chart"></i>
                    </div>
                    <div class="m-l-30">
                        <a href="{{ url('/statistik/km') }}">
                            <h3 class="m-b-0">Potensi Sumber Daya</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12 col-lg-12 mb-3">
        <div class="media align-items-center">
            <div class="m-l-30">
                <h3 class="m-b-0">Data</h3>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-4 mt-3">
        <div class="accordion" id="accordion-kud">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-green">
                            <i class="anticon anticon-file-text"></i>
                        </div>
                        <div class="m-l-30">
                            <a class="collapsed" data-toggle="collapse" href="#kud">
                                <h3 class="m-b-0">Kondisi Umum Daerah</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="kud" class="collapse" data-parent="#accordion-kud">
                    {{-- KLW --}}
                    <div class="accordion" id="accordion-klw">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" data-toggle="collapse" href="#klw">
                                        <span>Karaktristik Lokasi dan Wilayah</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="klw" class="collapse" data-parent="#accordion-klw">
                                <div class="card-body">
                                    <ul class="side-nav-menu scrollable">
                                        <li class="mb-2">
                                            <a href="{{ url('kud/0') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Topografi</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/1') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Geologi</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/2') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Hidrologi</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/3') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Klimatologi</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/4') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Luasdan Batas Wilayah</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/5') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Letak dan Kondisi Geografis</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <div class="accordion" id="accordion-pl">

                                                <a class="collapsed" data-toggle="collapse" href="#pl">
                                                    <i class="anticon anticon-right"></i>
                                                    <span style="color: black">penggunaan Lahan</span>
                                                </a>

                                                <div id="pl" class="collapse" data-parent="#accordion-pl">
                                                    <div class="card-body">
                                                        <ul class="side-nav-menu scrollable">
                                                            <li class="mb-2">
                                                                <a href="{{ url('kud/6') }}">
                                                                    <i class="anticon anticon-double-right"></i>
                                                                    <span style="color: black">Kawasan Budaya</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('kud/7') }}">
                                                                    <i class="anticon anticon-double-right"></i>
                                                                    <span style="color: black">Kawasan Lindung</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     {{-- WRB --}}
                     <div class="accordion" id="accordion-wrb">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" data-toggle="collapse" href="#wrb">
                                        <span>Wilayah Rawan Bencana</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="wrb" class="collapse" data-parent="#accordion-wrb">
                                <div class="card-body">
                                    <ul class="side-nav-menu scrollable">
                                        <li class="mb-2">
                                            <a href="{{ url('kud/8') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Tsunami</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/9') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Banjir</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/10') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Abrasi</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/11') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Longsor</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/12') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Kebakaran Hutan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/13') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Gempa</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     {{-- dmg --}}
                     <div class="accordion" id="accordion-dmg">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" data-toggle="collapse" href="#dmg">
                                        <span>Demografi</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="dmg" class="collapse" data-parent="#accordion-dmg">
                                <div class="card-body">
                                    <ul class="side-nav-menu scrollable">
                                        <li class="mb-2">
                                            <a href="{{ url('kud/14') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Demografi</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('kud/15') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Struktur</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mt-3">
        <div class="accordion" id="accordion-abs">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-green">
                            <i class="anticon anticon-file-text"></i>
                        </div>
                        <div class="m-l-30">
                            <a class="collapsed" data-toggle="collapse" href="#abs">
                                <h3 class="m-b-0">Keagamaan / ABS-SBK</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="abs" class="collapse" data-parent="#accordion-abs">

                     {{-- NM --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('keagamaan/4') }}">
                                        <span>Nagari Madani</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    {{-- LP --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('keagamaan/5') }}">
                                        <span>Lembaga Pendidikan</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    {{-- SDM --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('keagamaan/6') }}">
                                        <span>SDM Keagamaan</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    {{-- LA --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('keagamaan/7') }}">
                                        <span>Lembaga Adat</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    {{-- SI --}}
                    <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('keagamaan/8') }}">
                                        <span>Sarana Ibadah</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mt-3">
        <div class="accordion" id="accordion-km">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-green">
                            <i class="anticon anticon-file-text"></i>
                        </div>
                        <div class="m-l-30">
                            <a class="collapsed" data-toggle="collapse" href="#km">
                                <h3 class="m-b-0">Kesejahteraan Masyarakat</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="km" class="collapse" data-parent="#accordion-km">
                     {{-- kpm --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('km') }}">
                                        <span>Kesejahteraan Masyarakat</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mt-3">
        <div class="accordion" id="accordion-dsd">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-green">
                            <i class="anticon anticon-file-text"></i>
                        </div>
                        <div class="m-l-30">
                            <a class="collapsed" data-toggle="collapse" href="#dsd">
                                <h3 class="m-b-0">Daya saing Daerah</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="dsd" class="collapse" data-parent="#accordion-dsd">
                     {{-- kp --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('dsd/') }}">
                                        <span>Daya Saing Daerah</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mt-3">
        <div class="accordion" id="accordion-pu">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-green">
                            <i class="anticon anticon-file-text"></i>
                        </div>
                        <div class="m-l-30">
                            <a class="collapsed" data-toggle="collapse" href="#pu">
                                <h3 class="m-b-0">Pelayanan <br>Umum</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="pu" class="collapse" data-parent="#accordion-pu">

                     {{-- luwd --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('pu/0') }}">
                                        <span>Layanan Urusan Wajib Dasar</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    {{-- luwnd --}}
                    <div class="accordion" id="accordion-luwnd">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" data-toggle="collapse" href="#luwnd">
                                        <span>Layanan Urusan Wajib Non Dasar</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="luwnd" class="collapse" data-parent="#accordion-luwnd">
                                <div class="card-body">
                                    <ul class="side-nav-menu scrollable">
                                        <li class="mb-2">
                                            <a href="{{ url('pu/1') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Tenaga Kerja</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/2') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pemberdayaan Perempuan dan Perlinfungan Anak</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/3') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pangan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/4') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pertanahan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/5') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Lingkungan Hidup</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/6') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Administrasi Kependudukan dan Pencatatan Sipil</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/7') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pemberdayaan Masyarakat dan Desa</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/8') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pengendalian Penduduk dan Keluarga Berencana</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/9') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Perhubungan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/10') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Komunikasi dan Informatika</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/11') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Koperasi, Usaha Kecil dan Menengah</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/12') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Penanaman Modal</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/13') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Kepemudaan dan Olahraga</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/14') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Statistik</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/15') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Persandian</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/16') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Kebudayaan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/17') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Perpustakaan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/18') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Kearsipan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- lup --}}
                     <div class="accordion" id="accordion-lup">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" data-toggle="collapse" href="#lup">
                                        <span>Layanan urusan Pilihan</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="lup" class="collapse" data-parent="#accordion-lup">
                                <div class="card-body">
                                    <ul class="side-nav-menu scrollable">

                                        <li class="mb-2">
                                            <a href="{{ url('pu/19') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pariwisata</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/20') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pertanian</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/21') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Kehutanan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/22') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Energi dan sumber Daya mineral</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/23') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Perdagangan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/24') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Perindustrian</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/25') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Transmigrasi</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/26') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Kelautan dan Perikanan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- pUr --}}
                     <div class="accordion" id="accordion-pp">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" data-toggle="collapse" href="#pp">
                                        <span>Penunjang Urusan</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="pp" class="collapse" data-parent="#accordion-pp">
                                <div class="card-body">
                                    <ul class="side-nav-menu scrollable">
                                        <li class="mb-2">
                                            <a href="{{ url('kud/27') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">perancangan Pembangunan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/28') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Keuangan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/29') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Kepegawaian serta Pendidikan dan Pelatihan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/30') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Penelitian dan Pengembangan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/31') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Pengawasan</span>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ url('pu/32') }}">
                                                <i class="anticon anticon-double-right"></i>
                                                <span style="color: black">Sekretariat Dewan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mt-3">
        <div class="accordion" id="accordion-default">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-green">
                            <i class="anticon anticon-file-text"></i>
                        </div>
                        <div class="m-l-30">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwoDefault">
                                <h3 class="m-b-0">Potensi Sumber Daya</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="collapseTwoDefault" class="collapse" data-parent="#accordion-default">
                     {{-- kp --}}
                     <div class="accordion" id="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <a class="collapsed" href="{{ url('psd/kp') }}">
                                        <span>Kawasan Pembangunan</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection

@section('js')

@endsection
