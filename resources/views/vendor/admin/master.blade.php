<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>
        @yield('title')
    </title>

    @yield('css')
</head>

<body>
    {{-- Menu de Opciones --}}
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.linkedin.com/in/sergio-daniel-yucra-patty-68a655186/">Sergio Yucra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="{{route('departments.index')}}">Departamentos</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="{{route('employees.index')}}">Empleados</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="btn btn-outline-light" aria-current="page" href="{{route('auth.showRegister')}}">Registro</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="btn btn-outline-light" aria-current="page" href="{{route('auth.showLogin')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    
    @yield('content')


    @yield('js')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
