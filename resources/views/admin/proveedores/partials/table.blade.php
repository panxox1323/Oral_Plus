<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Giro</th>
        <th>Acciones</th>
    </tr>
    @foreach($proveedores as $proveedor)
        <tr data-id="{{ $proveedor->id }}">
            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->telefono }}</td>
            <td>{{ $proveedor->email }}</td>
            <td>{{ $proveedor->giro }}</td>
            <td>
                @if(Auth::user()->type == 'admin')

                    <a href="{{ route('admin.proveedores.edit', $proveedor) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>

                @endif

            </td>
        </tr>
    @endforeach
</table>

