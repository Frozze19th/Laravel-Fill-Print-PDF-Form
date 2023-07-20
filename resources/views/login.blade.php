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
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0 disabled" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Nama Lengkap</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link disabled" href="#"><span>Supervisi</span></a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#">Sekolah</a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#"><span>Kepala Sekolah</span></a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#"><span>Guru</span></a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#"><span>Rekapitulasi</span></a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#"><span>User</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white text-end shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><i class="far fa-star" style="font-size: 20px;"></i>
                        <div class="container"></div><a class="btn btn-primary disabled" role="button" href="#">Masuk</a>
                    </div>
                </nav>
                <!-- Container content-->
                <div class="container-fluid" style="padding-top: 30px;">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-lg-12 col-xl-10">
                                <div class="card shadow-lg o-hidden border-0 my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-6 d-none d-lg-flex">
                                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;{{asset('/img/dogs/image3.jpeg')}}&quot;);"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <div class="text-center">
                                                        @if(session('error'))
                                                        <div class="alert alert-danger">
                                                            <b>Opps!</b> {{session('error')}}
                                                        </div>
                                                        @endif
                                                        <h4 class="text-dark mb-4">SELAMAT DATANG!</h4>
                                                    </div>
                                                    <form method="POST" class="user" action="{{route('loginproses')}}">
                                                        @csrf
                                                        <div class="mb-3"><input class="form-control form-control-user" type="text" aria-describedby="nip_user" placeholder="NIP" name="nip_user"></div>
                                                        <div class="mb-3"><input class="form-control form-control-user" type="password" placeholder="Password" name="password"></div>
                                                        <div class="mb-3">
                                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Masuk</button>
                                                    </form>
                                                    <div class="text-center"></div>
                                                    <div class="text-center"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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