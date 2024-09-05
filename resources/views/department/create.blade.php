@extends('admin::master')

@section('title', 'Registrar')

@section('body')
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('departments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!--Nombre -->
                        <div class="md-3 mt-2 col-sm-12">
                            <label for="inputNombre">{{ __('Departamento:') }}</label>
                            <div class="input-group">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    placeholder="{{ __('Introducir departamento') }}" autofocu>
                                <span class="input-group-text">
                                    <i class="fa fa-university" aria-hidden="true"></i>
                                </span>
                                @error('name')
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