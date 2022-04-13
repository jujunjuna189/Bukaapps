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
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/customcss/style.css') }}">
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ asset('assets/lib/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

</head>

<body class="az-body">
    @if(isset($back_nav))
    <div class="az-header shadow-none">
        <div class="container-fluid">
            <div class="az-header-left">
                <a href="{{ $back }}" class="text-dark h5"><i class="typcn typcn-arrow-left mr-3"></i> Kembali</a>
            </div><!-- az-header-left -->
        </div><!-- container -->
    </div><!-- az-header -->
    @endif

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
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="{{ asset('assets/img/icon/person.png') }}" alt=""></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">
                            <div class="az-img-user">
                                <img src="{{ asset('assets/img/icon/person.png') }}" alt="">
                            </div><!-- az-img-user -->
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->email }}</span>
                        </div><!-- az-header-profile -->

                        <!-- <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a> -->
                        <span class="dropdown-item cursor-pointer" onclick="logout_app()"><i class="typcn typcn-power-outline"></i> Sign Out</span>
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
                <li class="nav-item @if(isset($page_nav) && $page_nav == 1) active @endif">
                    <a href="{{ route('home') }}" class="nav-link"><i class="typcn typcn-clipboard"></i>Dashboard</a>
                </li><!-- nav-item -->
                @if(Auth::user()->role_kode == 1)
                <li class="nav-item @if(isset($page_nav) && $page_nav == 2) active @endif">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-folder"></i>Master</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="{{ route('kategori_kas') }}" class="nav-sub-link">Kategori Kas</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->

                <li class="nav-item @if(isset($page_nav) && $page_nav == 3) active @endif">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-group"></i>Pengguna</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item"><a href="{{ route('users', ['role_kode' => 1]) }}" class="nav-sub-link">Admin</a></li>
                        <li class="nav-sub-item"><a href="{{ route('users', ['role_kode' => 2]) }}" class="nav-sub-link">User</a></li>
                    </ul>
                </li><!-- nav-item -->
                @endif
                <li class="nav-item @if(isset($page_nav) && $page_nav == 4) active @endif">
                    <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i>Transaksi</a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a href="{{route('transaksi')}}" class="nav-sub-link">Pemasukan & Pengeluaran</a>
                        </li>
                        <li class="nav-sub-item">
                            <a href="{{route('utang_piutang')}}" class="nav-sub-link">Utang & Piutang</a>
                        </li>
                    </ul>
                </li><!-- nav-item -->
                <li class="nav-item @if(isset($page_nav) && $page_nav == 5) active @endif">
                    <a href="{{ route('stok_barang') }}" class="nav-link"><i class="typcn typcn-folder"></i>Stok Barang</a>
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
    <div class="az-content az-content-dashboard-four mobile-">
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
    <script src="{{ asset('assets/lib/chart.js/Chart.bundle.min.js') }}"></script>
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
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        })
    </script>


    <div class="az-navbar-backdrop"></div>
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>

    <script>
        let url = "<?= url('') ?>";
        let token = "<?= Illuminate\Support\Facades\Session::token() ?>";
    </script>
    @yield('js')
    <script>
        const logout_app = () => {
            $.ajax({
                url: url + '/logout',
                method: 'post',
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': token,
                },
                success: function(data) {
                    document.location.reload();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
</body>

</html>