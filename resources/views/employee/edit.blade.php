@extends('admin::master')

@section('title', 'Editar')

@section('content')
    <br>
    <h2 class="text-success font-weight-bold text-center">Actualización Empleado</h2>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('employees.update', $employee) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <!--Nombre -->
                        <div class="md-3 mt-2 col-sm-4">
                            <label for="inputNombre">{{ __('Nombre(s):') }}</label>
                            <div class="input-group">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $employee->name) }}" placeholder="{{ __('Introducir nombre') }}"
                                    autofocu>
                                <span class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Apellido -->
                        <div class="md-3 mt-2 col-sm-4">
                            <label for="inputApellido">{{ __('Apellido(s):') }}</label>
                            <div class="input-group">
                                <input type="text" name="lastname"
                                    class="form-control @error('lastname') is-invalid @enderror"
                                    value="{{ old('lastname', $employee->lastname) }}"
                                    placeholder="{{ __('Introducir Apellido') }}" autofocu>
                                <span class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--CI -->
                        <div class="md-3 mt-2 col-sm-4">
                            <label for="inputCedula de Identidad">{{ __('Cedula de Identidad(s):') }}</label>
                            <div class="input-group">
                                <input type="text" name="ci" class="form-control @error('ci') is-invalid @enderror"
                                    value="{{ old('ci', $employee->ci) }}"
                                    placeholder="{{ __('Introducir Cedula de Identidad') }}" autofocu>
                                <span class="input-group-text">
                                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                </span>
                                @error('ci')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <!--Email -->
                        <div class="md-3 mt-2 col-sm-4">
                            <label for="inputEmail">{{ __('Correo Electronico:') }}</label>
                            <div class="input-group">
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $employee->email) }}" placeholder="{{ __('Introducir Email') }}"
                                    autofocu>
                                <span class="input-group-text">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Direccion -->
                        <div class="md-3 mt-2 col-sm-4">
                            <label for="inputDireccion">{{ __('Direccion:') }}</label>
                            <div class="input-group">
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address', $employee->address) }}"
                                    placeholder="{{ __('Introducir Direccion') }}" autofocu>
                                <span class="input-group-text">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Departamento -->
                        <div class="md-3 mt-2 col-sm-4">
                            <label for="inputDepartamento">{{ __('Departamento:') }}</label>
                            <div class="input-group">
                                <select id="inputDepartamento" name="department_id"
                                    class="form-control @error('department_id') is-invalid @enderror">
                                    <option value="" selected disabled>----Seleccione un Departamento----</option>
                                    @foreach ($departments as $department)
                                        @if ($employee->department_id == $department['id'])
                                            <option value="{{ $department['id'] }}" selected>{{ $department['name'] }}
                                            </option>
                                        @else
                                            <option value="{{ $department['id'] }}">{{ $department['name'] }} </option>
                                        @endif
                                    @endforeach
                                </select>
                                <span class="input-group-text">
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                </span>
                                @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </div>


                    <!-- botones -->
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <a class="btn grey btn-outline-secondary" href="{{-- route('admin.cursos.index') --}}">{{ __('Cancelar') }}</a>
                        <button type="submit" class="btn btn-success">{{ __('Enviar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('js')

@stop
