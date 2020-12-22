<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="{{ asset('assets/image/logo-t.png') }}">
    <title>Sistem Informasi Database Perencanaan Daerah</title>

    <link href="{{ asset('assets/vendors/datatables/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendors/select2/select2.css')}}" rel="stylesheet">
    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <!-- page css -->
    <link href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datatables/buttons.dataTables.min.css') }}" rel="stylesheet">

</head>
<body>
<div class="app">
    <div class="layout">

            <div class="header">
                @auth
                <div class="logo logo-dark mt-2">
                    <a href="{{ url('/statistik/km') }}">
                        <img src="{{ asset('assets/image/logo-t.png') }}" alt="Logo">
                        <img class="logo-fold ml-3" src="{{ asset('assets/image/logo-t.png') }}" alt="Logo">
                    </a>
                </div>
                @endauth
                <div class="nav-wrap">
                    @auth
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    @endauth
                    @guest
                    <ul class="nav-left">

                    </ul>
                    <ul class="nav-right">
                        <a class="btn btn-default mr-4" href="{{url('login') }}">Login</a>
                    </ul>
                    @else
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="{{ asset('assets/image/logo-t.png') }}"  alt="">
                                </div>
                                <span class="mr-4"> {{ Auth::user()->name }} <i class="anticon font-size-10 anticon-down"></i> </span>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="{{ asset('assets/image/logo-t.png') }}" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item d-block p-h-15 p-v-10" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endguest
                </div>
            </div>

            @auth
            <div class="side-nav">
                @yield('side-bar')
            </div>

            <div class="page-container">
                <div class="main-content">
                    @yield('content')
                </div>

                <footer class="footer">
                    <div class="footer-content">
                        <p ></p>.</p>
                        <span>
                            <p class="m-b-0">Copyright © 2020 SIDPD.</p>
                        </span>
                    </div>
                </footer>
            </div>
            @endauth

            @guest

                <div class="main-content d-flex justify-content-center mt-5">
                    <div class="container-fluid p-h-0 p-v-40 bg full-height d-flex justify-content-center" >
                            <div class="container d-flex justify-content-center">
                                <div class="row align-items-center w-100">
                                    <div class="justify-content-center col-md-12 col-lg-12 ">

                                        @yield('content')

                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <footer class="footer">
                    <div class="footer-content">
                        <p ></p>.</p>
                        <span>
                            <p class="m-b-0">Copyright © 2020 SIDPD.</p>
                        </span>
                    </div>
                </footer>
            @endguest

    </div>
</div>

    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset ('assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript">
        $('.datepicker-input').datepicker({
            format: '{{ config('app.date_format_js') }}',
            timeFormat: 'hh:mm:ss',
            autoclose:true
        });
    </script>

    @yield('js')

</body>
</html>
