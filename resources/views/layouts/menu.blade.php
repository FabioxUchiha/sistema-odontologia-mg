
@canany(['ver usuarios', 'borrar usuarios', 'crear usuarios','editar usuarios'])
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user-circle"></i><span>Usuarios</span></a>
</li>
@endcan
@canany(['ver roles', 'borrar roles', 'crear roles','editar roles'])
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-address-card"></i><span>Roles</span></a>
</li>
@endcan
@canany(['ver inventarios', 'borrar inventarios', 'crear inventarios','editar inventarios'])
<li class="{{ Request::is('inventarios*') ? 'active' : '' }}">
    <a href="{{ route('inventarios.index') }}"><i class="fa fa-cubes"></i><span>Inventarios</span></a>
</li>
@endcan
@canany(['ver ingresos', 'borrar ingresos', 'crear ingresos','editar ingresos'])
<li class="{{ Request::is('ingresos*') ? 'active' : '' }}">
    <a href="{{ route('ingresos.index') }}"><i class="fa fa-money"></i><span>Ingresos y Egresos</span></a>
</li>
@endcan
@canany(['ver insumos', 'borrar insumos', 'crear insumos','editar insumos'])
<li class="{{ Request::is('insumos*') ? 'active' : '' }}">
    <a href="{{ route('insumos.index') }}"><i class="fa fa-archive"></i><span>Insumos</span></a>
</li>
@endcan
@canany(['ver notas', 'borrar notas', 'crear notas','editar notas'])
<li class="{{ Request::is('notas*') ? 'active' : '' }}">
    <a href="{{ route('notas.index') }}"><i class="fa fa-clipboard"></i><span>Notas</span></a>
</li>
@endcan
{{-- @canany(['ver notas', 'borrar notas', 'crear notas','editar notas']) --}}
<li>
    <a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>
{{-- @endcan --}}
<li>
{{-- @canany(['ver notas', 'borrar notas', 'crear notas','editar notas']) --}}
  <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		<i class="glyphicon glyphicon-th-list"></i>
    <span>
    Desplegables
    </span>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li class="{{ Request::is('desplegableNombreInventarios*') ? 'active' : '' }}">
    <a class="text-black"
        href="{{ route('desplegableNombreInventarios.index') }}">
        <span>Nombre Inventarios</span></a>
    </li>
    <li class="{{ Request::is('desplegableServicioIngresos*') ? 'active' : '' }}">
        <a class="text-black"
        href="{{ route('desplegableServicioIngresos.index') }}">
        <span>Servicio Ingresos</span></a>
    </li>
    <li><a href="#" class="text-black">Insumos</a></li>
    <li><a href="#" class="text-black">ingresos y egresos</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#" class="text-black">Separated link</a></li>
{{-- @endcan --}}
  </ul>

</li>




