@canany(['ver_notas', 'borrar_notas', 'crear_notas','editar_notas'])
<li class="{{ Request::is('notas*') ? 'active' : '' }}">
    <a href="{{ route('notas.index') }}"><i class="fa fa-clipboard"></i><span>Notas</span></a>
</li>
@endcan
@canany(['ver_usuarios', 'borrar_usuarios', 'crear_usuarios','editar_usuarios'])
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user-circle"></i><span>Usuarios</span></a>
</li>
@endcan
@canany(['ver_roles', 'borrar_roles', 'crear_roles','editar_roles'])
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-address-card"></i><span>Roles</span></a>
</li>
@endcan
<li class="{{ Request::is('inventarios*') ? 'active' : '' }}">
    <a href="{{ route('inventarios.index') }}"><i class="fa fa-edit"></i><span>Inventarios</span></a>
</li>


<li class="{{ Request::is('ingresos*') ? 'active' : '' }}">
    <a href="{{ route('ingresos.index') }}"><i class="fa fa-edit"></i><span>Ingresos</span></a>
</li>

