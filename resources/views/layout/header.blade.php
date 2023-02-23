<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

    <!-- End Bootstrap CSS -->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    @stack('scripts')
    @yield('css')
    <title>Document</title>
</head>
<body >
    <nav>
        <div class="container-fluid">

            <div class="row flex-nowrap">
                <div class="col-2 col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">

                        <!-- MENU  -->
                        
                        <a href="{{ route('obra.inicio') }}" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Inicio</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item">
                                    <a href="{{ route('obra.inicio') }}" class="nav-link align-middle px-0 " >
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                    </a>
                                </li>

                            <!-- Menu edicion -->
                            <!-- Nueva Obra -->
                            <li>
                                <a href="{{ route('obra.create') }}" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-card-checklist"></i><span class="ms-1 d-none d-sm-inline">Crear Obra</span></a>
                            </li>
                            <!-- Lista Obras -->
                            <li>
                                <a href="{{ route('obra.show') }}" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-cone-striped"></i><span class="ms-1 d-none d-sm-inline">Ver Obras</span></a>
                            </li>
                            <!-- Nuevo solicitante -->
                            <li>
                                <a href="{{ route('solicitante.create') }}" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-person-plus"></i> <span class="ms-1 d-none d-sm-inline">Nuevo solicitante</span></a>
                            </li>
                            <!-- Lista solicitantes -->
                            <li>
                                <a href="{{ route('solicitante.show') }}" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-journal-bookmark-fill"></i> <span class="ms-1 d-none d-sm-inline">Ver solicitantes</span></a>
                            </li>
                        </ul> bi-plus-circle-dotted
                        <!-- PERFIL -->
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ Vite::asset('resources/image/avatar.png') }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                    <span class="d-none d-sm-inline mx-1">{{auth()->guard('usuario')->user()->nombre}} </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <a class="dropdown-item d-sm-inline" href="{{ route('logout') }}">cerrar sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-9 col-xl-10 p-3 min-vh-100">
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </nav>
    @include('layout.footer')
    @yield("script")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
