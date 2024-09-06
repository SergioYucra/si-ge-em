@extends('admin::master')

@section('title', 'Register')

@section('content')
    <br>
    <h2 class="text-success font-weight-bold text-center">Registro Usuario</h2>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('auth.register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!--Nombre -->
                        <div class="form-group mt-2">
                            <label for="inputNombre">{{ __('Nombre(s):') }}</label>
                            <div class="input-group">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    placeholder="{{ __('Introducir nombre') }}" autofocu>
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
                        <!--Email -->
                        <div class="form-group mt-2">
                            <label for="inputEmail">{{ __('Correo Electronico:') }}</label>
                            <div class="input-group">
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    placeholder="{{ __('Introducir Email') }}" autofocu>
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
                        <!--Password -->
                        <div class="form-group mt-2">
                            <label for="password">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="{{ __('Introducir password') }}" autofocu>
                                <span class="input-group-text">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Password confirmacion-->
                        <div class="form-group mt-2">
                            <label for="password-confirm">{{ __('Confirmar Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirmar password') }}">
                        </div>
                    </div>

                    <!-- botones -->
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <button type="submit" class="btn btn-success w-100">{{ __('Registrar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('css')

@stop

@section('js')

@stop
