<div class="mt-4">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input wire:model.live="searchName" placeholder="Buscar Nombre" class="form-control"></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($departments->count())
                        @foreach ($departments as $department)
                        <tr>
                            <td>{{ $department->name }}</td>
                            <td style="width: 50%">
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{ route('departments.edit', $department) }}">Editar</a>
                        
                                    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" id="delete-form-{{ $department->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $department->id }})">Eliminar</button>
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
        @if ($departments->count())
            <div class="card-footer">
                {{ $departments->links() }}
            </div>
        @endif
    </div>
</div>
