@extends('admin::master')

@section('title', 'Inicio')

@section('content')

    <br>
    <div class="container">
        <br>
        <h2 class="text-success font-weight-bold text-center">Descripción | Acciones Básicas del Sistema</h2>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action list-group-item-light active" id="list-home-list"
                        data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Inicio</a>
                    <a class="list-group-item list-group-item-action list-group-item-light" id="list-department-list"
                        data-bs-toggle="list" href="#list-department" role="tab"
                        aria-controls="list-department">Departamentos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light" id="list-employee-list"
                        data-bs-toggle="list" href="#list-employee" role="tab"
                        aria-controls="list-employee">Empleados</a>
                    <a class="list-group-item list-group-item-action list-group-item-light" id="list-register-list"
                        data-bs-toggle="list" href="#list-register" role="tab"
                        aria-controls="list-register">Registro</a>
                    <a class="list-group-item list-group-item-action list-group-item-light" id="list-login-list"
                        data-bs-toggle="list" href="#list-login" role="tab" aria-controls="list-login">Login</a>
                </div>
            </div>
            <div class="col-sm-4 card">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        En la página de inicio se da una vista general de:
                        <ul>
                            <li>Frontend</li>
                            <li>Backend</li>
                            <li>Menu de navegación</li>
                            <li>Informacion del sistema</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="list-department" role="tabpanel" aria-labelledby="list-department-list">
                        En la página de departamentos se da una vista general de:
                        <ul>
                            <li>Lista de departamentos registrados con filtro por columna</li>
                            <li>Crear departamentos</li>
                            <li>Editar departamento</li>
                            <li>Eliminar departamento</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="list-employee" role="tabpanel" aria-labelledby="list-employee-list">
                        En la página de empleados se da una vista general de:
                        <ul>
                            <li>Lista de empleados registrados con filtro por columna</li>
                            <li>Crear empleados</li>
                            <li>Editar empleados</li>
                            <li>Eliminar empleados</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="list-register" role="tabpanel" aria-labelledby="list-register-list">
                        En la página de registro se da una vista de:
                        <ul>
                            <li>Formulario para el registro de usuario</li>
                            <li>Se registra el usuario</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="list-login" role="tabpanel" aria-labelledby="list-login-list">
                        En la página de login se da una vista de:
                        <ul>
                            <li>Formulario para el acceso del usuario</li>
                            <li>Al acceder nos muestra nuestro token de acceso generado por JWT</li>
                            <li>Las rutas protegidas necesitan el token para ser ejecutadas</li>
                            <li>
                                <div class="alert alert-danger" role="alert">
                                    Para acceder a las rutas protegidas use backend
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h2 class="text-success font-weight-bold text-center">Informacion del Desarrollador</h2>
        <br>
        <div class="row justify-content-center">
            <div class="card mb-3 col-sm-6">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/syucra.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> Sergio Daniel Yucra Patty</h5>
                            <p class="card-text">
                                Developer | Computer Engineering | Linux | Backend Developer | Laravel
                            </p>
                            <p class="card-text">
                                Información
                            </p>
                            <p class="card-text">
                                <small class="text-body-secondary">
                                    <a href="https://www.youtube.com/@sergioyucra22" class="me-2"><i
                                            class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/in/sergio-daniel-yucra-patty-68a655186/"
                                        class="me-2"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                                    <a href="https://github.com/SergioYucra" class="me-2"><i class="fa fa-github fa-2x"
                                            aria-hidden="true"></i></a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>


    </div>



@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('js')

@stop
