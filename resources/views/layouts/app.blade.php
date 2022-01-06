<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CESIA</title>

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="CESIA">
    <meta itemprop="description" content="CESIA">
    <meta itemprop="image" content="{{ asset('cesia.png') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://cesia.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="cesia">
    <meta property="og:description" content="CESIA">
    <meta property="og:image" content="{{ asset('cesia.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CESIA">
    <meta name="twitter:description" content="CESIA">
    <meta name="twitter:image" content="{{ asset('cesia.png') }}">

    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/fontawesome-free/css/all.min.css">
    {{-- toast --}}
    <link href="{{ asset('lte') }}/plugins/toastr/toastr.min.css" rel="stylesheet" />
    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    {{-- <!-- Theme style --> --}}
    <link rel="stylesheet" href="{{ asset('lte') }}/dist/css/adminlte.min.css">
    {{-- daterange --}}
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/daterangepicker/daterangepicker.css">

    {{-- datepicker --}}
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/datepicker/css/datepicker.css">
    <link rel="stylesheet" href="{{ asset('lte') }}/plugins/select2/css/select2.min.css">

    @yield('css')
</head>

<body class="hold-transition sidebar-mini text-sm layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark navbar-navy text-sm">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('lte') }}/dist/img/user2-160x160.jpg"
                            class="user-image img-circle elevation-2" alt="User Image">
                        <!-- <span class="d-none d-md-inline"> { { A uth::user()->nama }}</span> -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header bg-light-navy">
                            <img src="{{ asset('lte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                                alt="User Image">
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a class="btn  btn-info btn-flat" href="{ { url('users', A uth()->user()->id) }}"><i
                                    class="nav-icon fas fa-user"></i> Profile</a>
                            <a href="{{ url('logout') }}" class="btn  btn-danger btn-flat float-right">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-2 sidebar-light-navy">
            <a href="{{ url('home') }}" style="background: white" class="brand-link logo-switch">
                <img src="{{ asset('cesia.jpg') }}" alt="cesia"
                    class="brand-image-xl logo-xs img-rounded">
                <img src="{{ asset('cesia.png') }}" alt="CESIA" class="brand-image-xs logo-xl"
                    style="left: 12px">
            </a>

            <!-- Sidebar -->
            <div
                class="sidebar os-host os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-theme-dark">
                <!-- Sidebar Menu -->
                @include('layouts.sidebar')
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        {{-- <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside> --}}
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                v.0
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <a href="http://cesia.id">cesia</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <span id="msg-success" data-msg="{!! session('success') !!}"></span>
    <span id="msg-error" data-msg="{!! session('error') !!}"></span>
    <span id="msg-warning" data-msg="{!! session('warning') !!}"></span>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('lte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte') }}/dist/js/adminlte.min.js"></script>
    {{-- toastr --}}
    <script src="{{ asset('lte') }}/plugins/toastr/toastr.min.js"></script>
    {{-- moment --}}
    <script src="{{ asset('lte') }}/plugins/moment/moment.min.js"></script>
    {{-- date range --}}
    <script src="{{ asset('lte') }}/plugins/daterangepicker/daterangepicker.js"></script>

    {{-- datepicker --}}
    <script src="{{ asset('lte') }}/plugins/datepicker/js/bootstrap-datepicker.js"></script>

    <script src="{{ asset('sweetalert2') }}/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('plugins') }}/jquery.form.min.js"></script>
    <script src="{{ asset('plugins') }}/jquery.maskMoney.min.js"></script>
    <script src="{{ asset('plugins') }}/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="{{ asset('lte') }}/plugins/select2/js/select2.full.min.js"></script>


    <!-- DataTables -->
    <script src="{{ asset('lte') }}/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('lte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    {{-- icon fontawesome --}}
    {{-- <script src="https://kit.fontawesome.com/bd9fb4ca35.js" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js') }}/appcomponent.js"></script>
    <script>

        $(document).ready(function() {
            // toastr
            var success = $('#msg-success').data('msg');
            var error = $('#msg-error').data('msg');
            var warning = $('#msg-warning').data('msg');

            // Display a success toast, with a title
            if (success != '') {
                toastr.success(success);
            }

            // Display an error toast, with a title
            if (error != '') {
                toastr.error(error);
            }

            // Display a success toast, with a title
            if (warning != '') {
                toastr.success(warning);
            }

            var url = window.location;
            // for sidebar menu entirely but not cover treeview
            $('ul.nav-sidebar a').filter(function() {
                if (this.href) {
                    return this.href == url || url.href.indexOf(this.href) == 0;
                }
            }).addClass('active');

            // for the treeview
            $('ul.nav-treeview a').filter(function() {
                if (this.href) {
                    return this.href == url || url.href.indexOf(this.href) == 0;
                }
            }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

        });
    </script>
    @yield('script')
</body>

</html>
