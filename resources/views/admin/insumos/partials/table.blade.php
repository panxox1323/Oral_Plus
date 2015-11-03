<table class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <tr class="info">
            <th>Nombre</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Acciones</th>
        </tr>
        @foreach($insumo as $insumo)
            <tr data-id="{{ $insumo->id }}">
                <td>{{ $insumo->nombre }}</td>
                <td class="text-center">${{ number_format($insumo->precio_unitario) }}</td>
                <td class="text-center">{{ $insumo->stock }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.insumos.edit', $insumo) }}" class="btn btn-success btn-xs"><span class="icon-pencil2" title="Editar"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
</table>
