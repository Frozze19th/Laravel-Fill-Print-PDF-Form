<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pretty-Registration-Form-.css')}}">
    <title>Supervisi Sekolah</title>
    <meta name="author" content="Irfan Novian H1D018061">
</head>

<body id="page-top">
    <!-- Side Bar -->
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(78, 115, 223);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon "><img src="/images/{{Auth::user()->pic}}" class="rounded-circle" style="height: 45px;width:45px;"></div>
                    <div class="sidebar-brand-text mx-3"><span>{{Auth::user()->nama}}</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.html"><span>Supervisi</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html">Sekolah</a></li>
                    <li class="nav-item"><a class="nav-link" href="table.html"><span>Kepala Sekolah</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"><span>Guru</span></a></li>
                    <!--  Alasan di deactive: Bingung implementasi
                    <li class="nav-item"><a class="nav-link" href="register.html"><span>Rekapitulasi</span></a></li>
                    -->
                    @if(Auth::user()->lvl==2)
                        <li class="nav-item"><a class="nav-link" href="{{route('daftarpengawas')}}"><span>User</span></a></li>
                    @else
                    @endif
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white text-end shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <div class="container"></div><a class="btn btn-primary" role="button" href="{{route('logoutproses')}}">Keluar</a>
                    </div>
                </nav>
                <!-- Container content-->
                <div class="container-fluid" style="padding-top: 30px;">
                    <!-- Content isi -->
                    @yield('main')
                </div>
            </div>
            <!-- footer -->
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
</body>

</html>