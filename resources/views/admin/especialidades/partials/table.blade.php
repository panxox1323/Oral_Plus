<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Especialidad</th>
            <th>Acciones</th>
        </tr>
        @foreach($especialidades as $especialidad)
            <tr data-id="{{ $especialidad->id }}">
                <td>{{ $especialidad->id }}</td>
                <td>{{ $especialidad->especialidad }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.especialidades.destroy', $especialidad], 'method' => 'DELETE']) !!}
                    <a href="{{ route('admin.especialidades.edit', $especialidad) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                    <button type="submit" alt="Eliminar" onclick="return confirm('Seguro que desea eliminar a: {!! $especialidad->especialidad !!}')" class="btn btn-danger"><span class="icon-trash"></span></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</table>
