<table class="table-responsive">
    <table class="table table-striped">
        <tr class="info">
            <th class="active">#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripci&oacute;n</th>
            <th>Acciones</th>
        </tr>
        @foreach($insumo as $insumo)
            <tr data-id="{{ $insumo->id }}">
                <td>{{ $insumo->id }}</td>
                <td>{{ $insumo->nombre }}</td>
                <td>${{ $insumo->precio_unitario }}</td>
                <td>{{ $insumo->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.insumos.destroy', $insumo], 'method' => 'DELETE']) !!}
                    <a href="{{ route('admin.insumos.edit', $insumo) }}" class="btn btn-success"><span class="icon-edit" title="Editar"></span></a>
                    <button type="submit" alt="Eliminar" onclick="return confirm('Seguro que desea eliminar a: {!! $insumo->nombre !!}')" class="btn btn-danger"><span class="icon-trash"></span></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</table>
