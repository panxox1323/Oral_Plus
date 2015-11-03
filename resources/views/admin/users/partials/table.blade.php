
<table class="table table-striped table-bordered table-hover">
    <tr class="info">
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Tipo</th>
        <th>Saldo</th>
        <th class="text-center">Acciones</th>
    </tr>
    @foreach($users as $user)
        <tr data-id="{{ $user->id }}">
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ \Carbon\Carbon::parse($user->fecha_nacimiento)->age }} a&ntilde;os</td>
            <td>{{ trans($user->type) }}</td>
            <td>$ {{number_format($user->saldo) }}</td>
            <td class="text-center">
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-success btn-xs" title="Editar usuario" target=""><span class="icon-pencil2"></span></a>
                <a href="{{ route('admin.users.show', $user) }}" class="btn btn-warning btn-xs" title="Historial cl&iacute;nico" target=""><span class="icon-folder2"></span></a>
                <a href="{{ route('admin.users.show', $user) }}" class="btn btn-primary btn-xs" title="Pagar Cuenta" target=""><span class="icon-moneybag"></span></a>
            </td>
        </tr>
    @endforeach
</table>

