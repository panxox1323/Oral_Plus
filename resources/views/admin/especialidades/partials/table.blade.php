
<table class="table table-striped table-bordered table-hover">
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
                <a href="{{ route('admin.especialidades.edit', $especialidad) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
            </td>
        </tr>
    @endforeach
</table>
