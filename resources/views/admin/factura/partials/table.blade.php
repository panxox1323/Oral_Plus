<table class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <tr class="info">
            <th>N&uacute;mero Factura</th>
            <th>Proveedor</th>
            <th class="text-center">Fecha</th>
            <th>Forma Pago</th>
            <th class="text-center">Acciones</th>
        </tr>
        @foreach($facturas as $factura)
            <tr data-id="{{ $factura->id_factura }}">
                <td>{{ $factura->id_factura }}</td>
                <td>{{ $factura->proveedor->nombre }}</td>
                <td class="text-center">{{ $factura->fecha }}</td>
                <td>{{ $factura->forma_pago }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.factura.edit', $factura->id_factura) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil"></span></a>
                    <a href="{{ route('admin.factura.show', $factura) }}" class="btn btn-warning btn-xs" title="Ver Factura" target=""><span class="icon-magnifier"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
</table>
