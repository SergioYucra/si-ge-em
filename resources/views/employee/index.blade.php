@extends('admin::master')

@section('title', 'Empleados')

@section('content')
    <br>
    <h2 class="text-danger font-weight-bold text-center">Empleados</h2>
    <br>
    <div class="container">
        <a href="{{ route('employees.create') }}" class="btn btn-success">
            {{ __('+ Agregar Empleado') }}
        </a>
        @livewire('employee-index')
    </div>

@stop

@section('css')

@stop

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const message = "{{ session('message') }}";
            const message2 = "{{ session('message2') }}";
            if (message) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: message,
                    confirmButtonText: 'Aceptar'
                });
            }
            if (message2) {
                Swal.fire({
                    icon: "success",
                    title: "Completado",
                    text: message2,
                    confirmButtonText: 'Aceptar'
                });
            }
        });

        function confirmDelete(id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¿Deseas eliminar este registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar!',
                cancelButtonText: 'No, cancelar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@stop
