<div class="mt-4">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input wire:model.live="searchName" placeholder="Buscar Nombre" class="form-control"></th>
                        <th><input wire:model.live="searchLastname" placeholder="Buscar Apellido" class="form-control"></th>
                        <th><input wire:model.live="searchCi" placeholder="Buscar CI" class="form-control"></th>
                        <th><input wire:model.live="searchEmail" placeholder="Buscar Email" class="form-control"></th>
                        <th><input wire:model.live="searchAddress" placeholder="Buscar Dirección" class="form-control"></th>
                        <th><input wire:model.live="searchDepartment" placeholder="Buscar Depto" class="form-control"></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>CI</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($employees->count())
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->lastname }}</td>
                                <td>{{ $employee->ci }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->department ? $employee->department->name : 'Sin Departamento' }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-primary" href="{{ route('employees.edit', $employee) }}">Editar</a>
                                
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" id="delete-form-{{ $employee->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $employee->id }})">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                                
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center"><strong>No hay registros</strong></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @if ($employees->count())
            <div class="card-footer">
                {{ $employees->links() }}
            </div>
        @endif
    </div>
</div>


