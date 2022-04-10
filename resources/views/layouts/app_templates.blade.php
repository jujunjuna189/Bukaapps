<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 5 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Bukaapps</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/typicons.font/typicons.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/azia.css') }}">
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('assets/lib/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

</head>

<body class="az-body">

    @if(!isset($auth))
    <div class="az-header shadow-none">
        <div class="container-fluid">
            <div class="az-header-left">
                <a href="index.html" class="az-logo"><span class="text-capitalize">B</span>ukaapps</a>
                <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-center">
                <input type="search" class="form-control" placeholder="Search for schedules and events...">
                <button class="btn"><i class="fas fa-search"></i></button>
            </div><!-- az-header-center -->
            <div class="az-header-right">
                <div class="az-header-message">
                    <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
                </div><!-- az-header-message -->
                <div class="dropdown az-header-notification">
                    <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header mg-b-20 d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <h6 class="az-notification-title">Notifications</h6>
                        <p class="az-notification-text">You have 2 unread notification</p>
                        <div class="az-notification-list">
                            <div class="media new">
                                <div class="az-img-user"><img src="" alt=""></div>
                                <div class="media-body">
                                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                    <span>Mar 15 12:32pm</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media new">
                                <div class="az-img-user online"><img src="" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                    <span>Mar 13 04:16am</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                                <div class="az-img-user"><img src="" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                    <span>Mar 13 02:56am</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                                <div class="az-img-user"><img src="" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                                    <span>Mar 12 10:40pm</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                        </div><!-- az-notification-list -->
                        <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                    </div><!-- dropdown-menu -->
                </div><!-- az-header-notification -->
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="" alt=""></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">
                            <div class="az-img-user">
                                <img src="" alt="">
                            </div><!-- az-img-user -->
                            <h6>Aziana Pechon</h6>
                            <span>Premium Member</span>
                        </div><!-- az-header-profile -->

                        <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                        <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                    </div><!-- dropdown-menu -->
                </div>
            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-navbar az-navbar-dashboard-four">
        <div class="container-fluid">
            <div class="az-navbar-header">
                <a href="index.html" class="az-logo">Buka<span>apps</span></a>
            </div><!-- az-navbar-header -->
            <div class="az-navbar-search">
                <input type="search" class="form-control" placeholder="Search for anything...">
                <button class="btn"><i class="fas fa-search "></i></button>
            </div><!-- az-navbar-search -->
            <ul class="nav">
                <li class="nav-label">Main Menu</li>
                <li class="nav-item active">
                    <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Web Analytics</a></li>
                        <li class="nav-sub-item"><a href="dashboard-two.html" class="nav-sub-link">Sales Monitoring</a></li>
                        <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link">Ad Campaign</a></li>
                        <li class="nav-sub-item active"><a href="dashboard-four.html" class="nav-sub-link">Event Management</a></li>
                        <li class="nav-sub-item"><a href="dashboard-five.html" class="nav-sub-link">Helpdesk Management</a></li>
                        <li class="nav-sub-item"><a href="dashboard-six.html" class="nav-sub-link">Finance Monitoring</a></li>
                        <li class="nav-sub-item"><a href="dashboard-seven.html" class="nav-sub-link">Cryptocurrency</a></li>
                        <li class="nav-sub-item"><a href="dashboard-eight.html" class="nav-sub-link">Executive / SaaS</a></li>
                        <li class="nav-sub-item"><a href="dashboard-nine.html" class="nav-sub-link">Campaign Monitoring</a></li>
                        <li class="nav-sub-item"><a href="dashboard-ten.html" class="nav-sub-link">Product Management</a></li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-folder"></i>Master</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="{{ route('kategori_kas') }}" class="nav-sub-link">Jenis Kas</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->

                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-group"></i>Pengguna</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item"><a href="{{route('users')}}" class="nav-sub-link">Admin</a></li>
                        <li class="nav-sub-item"><a href="#" class="nav-sub-link">User</a></li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Transaksi</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="app-mail.html" class="nav-sub-link">Pemasukan & Pengeluaran</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="app-mail.html" class="nav-sub-link">Utang & Piutang</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Stok Barang</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Background</a></li>
                        <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Border</a></li>
                        <li class="nav-sub-item"><a href="util-display.html" class="nav-sub-link">Display</a></li>
                        <li class="nav-sub-item"><a href="util-flex.html" class="nav-sub-link">Flex</a></li>
                        <li class="nav-sub-item"><a href="util-height.html" class="nav-sub-link">Height</a></li>
                        <li class="nav-sub-item"><a href="util-margin.html" class="nav-sub-link">Margin</a></li>
                        <li class="nav-sub-item"><a href="util-padding.html" class="nav-sub-link">Padding</a></li>
                        <li class="nav-sub-item"><a href="util-position.html" class="nav-sub-link">Position</a></li>
                        <li class="nav-sub-item"><a href="util-typography.html" class="nav-sub-link">Typography</a></li>
                        <li class="nav-sub-item"><a href="util-width.html" class="nav-sub-link">Width</a></li>
                        <li class="nav-sub-item"><a href="util-extras.html" class="nav-sub-link">Extras</a></li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Laporan</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Statistik</a></li>
                        <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Laporan</a></li>
                    </ul>
                </li><!-- nav-item -->
            </ul><!-- nav -->
        </div><!-- container-fluid -->
    </div><!-- az-navbar -->

    @endif
    <div class="az-content az-content-dashboard-four">
        <div class="media media-dashboard">
            @yield('content')
        </div>
    </div><!-- az-content -->

    <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>© 2022 Jun pusproject.com | Support By Azia Teplate Free</span>
        </div><!-- container -->
    </div><!-- az-footer -->

    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset('assets/lib/ionicons/ionicons.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/lib/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('assets/js/azia.js') }}"></script>
    <script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets/lib/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/lib/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/lib/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/lib/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        })
    </script>


    <div class="az-navbar-backdrop"></div>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>

</html>