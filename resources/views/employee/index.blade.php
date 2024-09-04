@extends('admin::master')

@section('title', 'Empleados')

@section('body')
    <br>
    <h2 class="text-danger font-weight-bold text-center">Empleados</h2>
    <br>
    <div class="container">
        <a href="{{ route('employees.create') }}" class="btn btn-success">
            {{ __('+ Agregar Empleado') }}
        </a>
    </div>

@stop

@section('css')

@stop

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const message = "{{ session('message') }}";
            if (message) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: message,
                    confirmButtonText: 'Aceptar'
                });
            }
        });
    </script>
@stop
