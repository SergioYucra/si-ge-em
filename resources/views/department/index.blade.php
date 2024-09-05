@extends('admin::master')

@section('title', 'Empleados')

@section('body')
    <br>
    <h2 class="text-danger font-weight-bold text-center">Departamentos</h2>
    <br>
    <div class="container">
        <a href="{{ route('departments.create') }}" class="btn btn-success">
            {{ __('+ Agregar Departamento') }}
        </a>
        @livewire('department-index')
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