@canany(['ver_notas', 'borrar_notas', 'crear_notas','editar_notas'])
<li class="{{ Request::is('notas*') ? 'active' : '' }}">
    <a href="{{ route('notas.index') }}"><i class="fa fa-edit"></i><span>Notas</span></a>
</li>
@endcan
@canany(['ver_users', 'borrar_users', 'crear_users','editar_users'])
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
@endcan
@canany(['ver_roles', 'borrar_roles', 'crear_roles','editar_roles'])
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endcan
